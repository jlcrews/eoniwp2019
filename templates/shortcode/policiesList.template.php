<?php
/**
 * Policy List Template
 *
 * @var array $policiesArray
 */
?>
<ul class="policyList">
<?php foreach ($policiesArray as $policy) : ?>
    <li>
        <h4><?=$policy['title']?></h4>
        <?=$policy['content']?>
    </li>
<?php endforeach;?>
</ul>
