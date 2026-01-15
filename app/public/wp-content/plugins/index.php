<?php
// Silence is golden.
function jaf_admin_menu() {
    add_menu_page(
        'Job Applications',
        'Job Applications',
        'manage_options',
        'job-applications',
        'jaf_admin_page',
        'dashicons-id',
        20
    );
}
add_action('admin_menu', 'jaf_admin_menu');

function jaf_admin_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'job_applications';

    $results = $wpdb->get_results("SELECT * FROM $table_name ORDER BY created_at DESC");

    echo "<div class='wrap'><h1>Job Applications</h1>";

    if (empty($results)) {
        echo "<p>No applications found.</p></div>";
        return;
    }

    echo "<table class='widefat fixed striped'>";
    echo "<thead><tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Resume</th>
            <th>Message</th>
            <th>Date</th>
          </tr></thead><tbody>";

    foreach ($results as $row) {
        $resume = $row->resume_link ? "<a href='{$row->resume_link}' target='_blank'>View</a>" : "N/A";
        echo "<tr>
                <td>{$row->id}</td>
                <td>{$row->name}</td>
                <td>{$row->email}</td>
                <td>{$row->phone}</td>
                <td>{$resume}</td>
                <td>{$row->message}</td>
                <td>{$row->created_at}</td>
              </tr>";
    }

    echo "</tbody></table></div>";
}
