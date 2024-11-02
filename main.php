<?php

require 'vendor/autoload.php';

use Google\Cloud\Vision\V1\ImageAnnotatorClient;

function analyzeImage($imageUrl) {
    // Initialize the ImageAnnotator client
    $imageAnnotator = new ImageAnnotatorClient();

    // Fetch image data from URL
    $imageData = file_get_contents($imageUrl);
    
    if ($imageData === false) {
        echo "Failed to retrieve the image from URL.";
        return;
    }

    // Run label detection on the image
    try {
        $response = $imageAnnotator->labelDetection($imageData);
        $labels = $response->getLabelAnnotations();

        if ($labels) {
            echo "Objects identified in the image:\n";
            foreach ($labels as $label) {
                echo $label->getDescription() . "\n";
            }
        } else {
            echo "No objects identified.";
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    } finally {
        $imageAnnotator->close();
    }
}

// Set your image URL
$imageUrl = 'https://carolinahoneybees.com/wp-content/uploads/2021/12/identification-of-honey-bees.jpg';

// Analyze the image
analyzeImage($imageUrl);
