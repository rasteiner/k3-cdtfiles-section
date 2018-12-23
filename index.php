<?php 
use Kirby\Cms\Section;

$base = Section::$types['files'];

Kirby::plugin('rasteiner/k3-cdtfiles-section', [
    'sections' => [
        'cdtfiles' => array_replace_recursive($base, [
            'computed' => [
                'data' => function () use ($base) {
                    $super = $base['computed']['data']->bindTo($this);

                    $defaultData = $super();
                    $cdt = $this->dragText;
                    
                    if ($cdt) {
                        $i = 0;
                        foreach ($this->files as $file) {
                            $defaultData[$i]['dragText'] = $file->toString($cdt);

                            $i++;
                        }
                    }

                    return $defaultData;
                }
            ]
        ])
    ]
]);