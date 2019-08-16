<?php
/**
 * Policy LIst Shortcode
 * @return string/
 */

function policyList(): string
{
    $initialQuery = [
        'post_type' => 'policy',
        'post_status' => 'publish',
        'order' => 'DESC',
    ];

    $policyQuery = new WP_Query($initialQuery);
    $postData = [];

    while ($policyQuery->have_posts()) : $policyQuery->the_post();
        $postID = get_the_ID();

        $postData[$postID] = [
            'title' => get_the_title(),
            'content' => get_the_content(),
            'date' => get_the_date('M j, Y',get_the_ID())
        ];
        wp_reset_postdata();
    endwhile;
    
    $string = populate_template_file('/shortcode/policiesList',
        [
            'policiesArray' => $postData
        ]
    );

    return $string;
}
add_shortcode('policyList', 'policyList');