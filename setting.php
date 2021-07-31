<?php
include_once "components/form/_index.php";
include_once "components/basic/_index.php";
?>

<div id="setting-section" class="setting-section">
        <div class="text-center setting-panel hide">
                <div class="setting-panel-content">
                        <ul class="theme-skin mb-1 radio-button-group" id="ui-style-panel">
                                <p class="option-label">UI Style</p>
                                <!-- TODO: make buttons  equal widths -->
                                <?php
                                Button(label: 'Flat', id: 'flat-skin-button');
                                Button(label: 'Neumorphism', id: 'neu-skin-button');
                                Button(label: 'Glassmorphism', id: 'glass-skin-button');
                                ?>
                        </ul>

                        <div class="scrollable ">
                                <!-- STYLE CUSTOMIZER -->
                                <div id="customizer-panel">
                                        <div class="customizer  option-panel mb-3" id="neu-customizer">
                                                <p class="option-label">Neu Custom</p>
                                                <?php
                                                // NOTICE: echo can only used in "<?php", not "<=?"
                                                echo RangeSlider(label: 'Distance X', id: 'neu-distance-x',  max: 20);
                                                echo  RangeSlider(label: 'Distance Y', id: 'neu-distance-y', max: 20);
                                                echo RangeSlider(label: 'Blur', id: 'blur', max: 20);
                                                echo RangeSlider(label: 'Spread', id: 'neu-spread', min: -5, max: 5);
                                                echo RangeSlider(label: 'Light intensity', id: 'light-intensity', max: 20);
                                                echo RangeSlider(label: 'Dark intensity', id: 'dark-intensity', max: 20);
                                                echo RangeSlider(label: 'Surface curvature', id: 'surface-curvature', min: -20, max: 20);
                                                ?>

                                                <p>Border style</p>
                                                <div class="radio-group-wrapper">
                                                        <?php
                                                        echo Radio(id: 'solid-border', value: 0, group: 'neu-border-style', label: '');
                                                        echo Radio(id: 'double-border', value: 1, group: 'neu-border-style', label: '');
                                                        echo Radio(id: 'dotted-border', value: 2, group: 'neu-border-style', label: '');
                                                        echo Radio(id: 'dashed-border', value: 3, group: 'neu-border-style', label: '');
                                                        ?>
                                                </div>
                                                <?php
                                                echo RangeSlider(label: 'Border width', id: 'neu-border-width',  max: 10);
                                                echo RangeSlider(label: 'Border brightness', id: 'neu-border-brightness', min: -100, max: 100);
                                                ?>
                                        </div>
                                        <div class="customizer" id="flat-customizer-in-progress">
                                                <p class="option-label">Flat Custom</p>
                                        </div>
                                        <div class="customizer" id="glass-customizer">
                                                <p class="option-label">Glass Custom</p>
                                                <?php
                                                echo RangeSlider(label: 'Transparency', id: 'glass-transparency',  max: 1);
                                                echo RangeSlider(label: 'Blur', id: 'glass-blur', max: 30);
                                                echo RangeSlider(label: 'Border size', id: 'glass-border-size', max: 10);
                                                ?>
                                        </div>
                                </div>
                                <!-- GLOBAL CUSTOMIZER -->
                                <div id="color-panel" class="option-panel mb-3">
                                        <p class="option-label">Colour</p>
                                        <div class="row px-4">
                                                <div class="col-6 p-0">
                                                        <label for="highlight-color-picker">Highlight</label>
                                                        <input type="color" id="highlight-color-picker" value="#0000ff">
                                                </div>
                                                <div class="col-6 p-0">
                                                        <label for="scheme-color-picker">Scheme</label>
                                                        <input type="color" id="scheme-color-picker" value="#f1f3f6">
                                                </div>
                                        </div>
                                        <p>Classification</p>
                                        <div class="row mt-1 px-4">
                                                <div class="col-4 p-0 ">
                                                        <input class="color-picker" type="color" id="colorfull1-picker" value="#01724b">
                                                </div>
                                                <div class="col-4 p-0 ">
                                                        <input class="color-picker" type="color" id="colorfull2-picker" value="#b44700">
                                                </div>
                                                <div class="col-4 p-0">
                                                        <input class="color-picker" type="color" id="colorfull3-picker" value="#c40639">
                                                </div>
                                        </div>
                                </div>

                                <!-- BORDER -->
                                <div id="border-panel" class="option-panel mb-3">
                                        <p class="option-label">Border</p>
                                        <?php
                                        echo RangeSlider(label: 'Radius', id: 'border-radius', max: 50);
                                        ?>
                                </div>

                                <!-- BACKGROUND -->
                                <div id="background-panel" class="option-panel mb-4">
                                        <p class="option-label">Background</p>
                                        <div id="outer-background-panel">
                                                <p> Outer </p>
                                                <div class="row px-4 justify-content-center">
                                                        <div class="col-4 background-item " id="background-0"> </div>
                                                        <div class="col-4 background-item custom-background hide" id="custom-background"> </div>
                                                </div>
                                                <div class="row px-4 justify-content-center">
                                                        <div class="col-4 background-item " id="background-1"> </div>
                                                        <div class="col-4 background-item " id="background-2"> </div>
                                                        <div class="col-4 background-item " id="background-3"> </div>
                                                        <div class="col-4 background-item " id="background-4"> </div>
                                                        <div class="col-4 background-item " id="background-5"> </div>
                                                        <div class="col-4 background-item " id="background-6"> </div>
                                                        <div class="col-4 background-item " id="background-7"> </div>
                                                        <div class="col-4 background-item " id="background-8"> </div>
                                                        <div class="col-4 background-item " id="background-9"> </div>

                                                </div>
                                        </div>
                                        <div id="inner-background-panel" class="mt-3">
                                                <p> Inner </p>
                                                <div class="row px-4 justify-content-center">
                                                        <div class="col-4 background-item " id="background-0"> </div>
                                                </div>
                                                <div class="row px-4 justify-content-center">
                                                        <div class="col-4 background-item " id="background-1"> </div>
                                                        <div class="col-4 background-item " id="background-2"> </div>
                                                        <div class="col-4 background-item " id="background-3"> </div>
                                                        <div class="col-4 background-item " id="background-4"> </div>
                                                        <div class="col-4 background-item " id="background-5"> </div>
                                                        <div class="col-4 background-item " id="background-6"> </div>
                                                        <div class="col-4 background-item " id="background-7"> </div>
                                                        <div class="col-4 background-item " id="background-8"> </div>
                                                        <div class="col-4 background-item " id="background-9"> </div>

                                                </div>
                                        </div>
                                </div>
                        </div>

                        <div class="setting-save-panel">
                                <?= Toggle('Save', 'setting-save-button') ?>
                                <!-- TODO: Random button-->
                        </div>
                </div>
        </div>
        <div class="setting-button-border hide animate__animated animate__backInLeft">
                <div class="setting-button ">
                        <a href="javascript:;" class="cp-toggle"><i class="fa fa-cog fa-spin" aria-label="Toggle setting button"></i></a>
                </div>
        </div>
</div>