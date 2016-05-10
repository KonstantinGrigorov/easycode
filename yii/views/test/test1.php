<?php
echo 'Before validation:';
echo '<pre>';
print_r($_REQUEST);
echo '</pre>';

echo 'After validation:';
echo '<pre>';
print_r($model->request);
echo '</pre>';
