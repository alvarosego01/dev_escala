<?php
// Block Name: Text Image Block


/*
    [fields] => Array
        (
            [media_text_1_title] => lorem ipsum dolor sit amet
            [media_text_1_subtitle] => lorem ipsum dolor sit amet
            [media_text_1_sections] => Array
                (
                    [0] => Array
                        (
                            [_id] => cf-Rhu4EgMVXLWNT4Y1UZEfK
                            [_type] => media_text_1_layout
                            [media_text_1_title] => lorem ipsum dolor sit amet
                            [media_text_1_description] => lorem ipsum dolor sit amet
                            [media_text_1_image] => 4316
                            [media_text_1_side] => image
                        )

                    [1] => Array
                        (
                            [_id] => cf-Ds7BBZlxJCcsayyVkLsZw
                            [_type] => media_text_1_layout
                            [media_text_1_title] => lorem ipsum dolor sit amet
                            [media_text_1_description] => lorem ipsum dolor sit amet
                            [media_text_1_image] => 4379
                            [media_text_1_side] => left
                        )

                )

        )
 */

$media_text_1_title = $context['fields']['media_text_1_title'];
$media_text_1_subtitle = $context['fields']['media_text_1_subtitle'];
$media_text_1_sections = $context['fields']['media_text_1_sections'];


     function _get_img($image_id,  $type)
    {

        $image_url = wp_get_attachment_url($image_id);
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

        if ($type == 'url') {
            return $image_url;
        } else if ($type == 'alt') {
            return $image_alt;
        } else {
            return $image_url;
        }
    }

 ?>

<section class="block-blog-text-image customSection sectionParent ">

    <div class="section-row">

          <?php if(isset($media_text_1_title) || isset($media_text_1_subtitle) ){ ?>
        <section class="innerSectionElement sct2 ">
            <div class="sectionElements">
                <?php if(isset($media_text_1_title) && $media_text_1_title != ''){ ?>
                <h2>
                    <?php echo $media_text_1_title; ?>
                </h2>
                <?php } ?>
                <?php if(isset($media_text_1_subtitle) && $media_text_1_subtitle != ''){ ?>
                <p class="text">
                    <?php echo $media_text_1_subtitle; ?>
                </p>
                <?php } ?>
            </div>
        </section>
        <?php } ?>

        <?php if(isset($media_text_1_sections) && count($media_text_1_sections) > 0){ ?>
        <section class="innerSectionElement sct2 ">

            <?php foreach($media_text_1_sections as $item){
                $title = $item['media_text_1_title'];
                $description = $item['media_text_1_description'];
                $image = $item['media_text_1_image'];
                $side = $item['media_text_1_side'] || 'right';
                ?>
            <div class="groupElements row <?php echo $side ?>"  >

                <div class="info col-md-12 col-lg-6">

                    <?php if(isset($title) && $title != ''){ ?>
                    <h3 class="secondaryTitle">
                        <?php echo $title; ?>
                    </h3>
                    <?php } ?>

                    <?php if(isset($description) && $description != ''){ ?>
                    <p class="text">
                        <?php echo $description; ?>
                    </p>
                    <?php } ?>

                </div>

                <div class="image col-md-12 col-lg-6">
                    <div class="containerImage">
                        <?php if(isset($image) && $image != ''){ ?>
                        <img src="<?php echo _get_img($image, 'url'); ?>" alt="<?php echo _get_img($image, 'alt'); ?>"
                            loading="lazy">
                        <?php } ?>

                    </div>
                </div>

            </div>
             <?php } ?>

        </section>

             <?php } ?>


    </div>


</section>
