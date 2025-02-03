<?php
/**
 * Plugin Name: Documents Loop
 * Description: Loop through subfolders inside the documents folder to display files (PDFs and JPGs) as links that open in a new tab.
 * Version: 2.0
 * Author: TIm Keeley
 * Author URI: https://www.cupocode.com
 */

function documents_loop_shortcode() {
    ob_start();
    ?>
    <style>
        #documents-viewer {
            text-align: left;
            max-width: 80%;
            margin: 0 auto;
        }

        #documents-viewer h3 {
            margin-bottom: 1rem;
        }

        #documents-viewer ul {
            list-style-type: none;
            padding-left: 1.5rem;
        }

        #documents-viewer li {
            margin-bottom: 0.25rem;
        }
    </style>

    <div id="documents-viewer">
        <?php
        // Set the parent documents folder path
        $documents_dir = plugin_dir_path(__FILE__) . 'documents/';
        $documents_url = plugin_dir_url(__FILE__) . 'documents/';

        // Check if the documents directory exists
        if ( is_dir($documents_dir) ) {
            // Loop through each folder inside the documents directory
            foreach (glob($documents_dir . '*', GLOB_ONLYDIR) as $folderPath) {
                $folderName = basename($folderPath);
                echo "<h3>" . esc_html($folderName) . "</h3>";
                echo "<ul>";

                // Get all files in the folder
                foreach (glob($folderPath . '/*') as $filePath) {
                    // Only process files (not directories)
                    if (is_file($filePath)) {
                        // Get the file extension in lowercase
                        $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
                        if (in_array($extension, array('pdf', 'jpg'))) {
                            $fileName = basename($filePath);
                            // Remove extension from display name
                            $displayName = pathinfo($fileName, PATHINFO_FILENAME);
                            $fileUrl = $documents_url . $folderName . '/' . $fileName;
                            echo "<li><a href='" . esc_url($fileUrl) . "' target='_blank'>" . esc_html($displayName) . "</a></li>";
                        }
                    }
                }
                echo "</ul><br>";
            }
        } else {
            echo "<p>No documents folder found.</p>";
        }
        ?>
    </div>
    <?php
    return ob_get_clean();
}

add_shortcode('documents_loop', 'documents_loop_shortcode');
