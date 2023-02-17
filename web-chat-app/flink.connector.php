<?php
use Flink\Kafka\Consumer\KafkaRecord;
use Flink\Kafka\Consumer\FlinkKafkaConsumer;
use Flink\Client\ClusterClient;

// Tạo một Kafka consumer
$consumer = new FlinkKafkaConsumer('ten-chu-de-kafka', 'localhost:9092');

// Tạo một Flink cluster client
$client = new ClusterClient('localhost', 8081);

// Xác định job và sử dụng cluster client để submit job
$job = $client->submitJob(function($env) use ($consumer) {
    $stream = $env->addSource($consumer);

    // Chuyển đổi các Kafka record thành giá trị số
    $values = $stream->map(function(KafkaRecord $record) {
        return floatval($record->getValue());
    });

    // Tính toán trung bình của các giá trị
    $average = $values->reduce(function($a, $b) {
        return $a + $b;
    })->map(function($value) {
        return $value / count($values);
    });

    // In kết quả
    $average->print();
});

// Chờ job được thực thi và in kết quả
echo $job->waitForResult();
