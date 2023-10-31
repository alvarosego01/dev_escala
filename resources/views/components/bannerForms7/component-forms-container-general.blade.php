
@php
    $forms_steps = null;
       if ( isset( $setForm ) && $setForm != null && $setForm != '' ){

            $forms_steps = $setForm;
       } else {
                $forms_steps = ACF_CUSTOM::_getField('form7');
        }


    // $forms_steps = ACF_CUSTOM::_getField('form7');
    // $forms = '[contact-form-7 id="4920" title="Profile demo - P1"][,][contact-form-7 id="4921" title="Profile demo - P2"]';
    $forms = isset($forms_steps) && $forms_steps != null ? $forms_steps : null;

    $forms_array = null;

    if($forms != null){
        // Verificar si el delimitador [,] existe en el string
        if (strpos($forms, '[,]') !== false) {
            // Separar el forms en un array usando el delimitador [,]
            $forms_array = explode('[,]', $forms);
        } else {
            // Conservar el string original en un array
            $forms_array = $forms;
        }

    } else {

        $_args = array('post_type' => 'wpcf7_contact_form', 'posts_per_page' => -1);
        $_rs = array();
        $_formShortcode = null;
        if( $_data = get_posts($_args)){
            foreach($_data as $_key){
                $_rs[$_key->ID] = $_key->post_title;
                if( $_key->post_title === 'Profile demo - Flujo Demo' ){
                    $_formShortcode = '[contact-form-7 id="'.$_key->ID.'"]';
                    $forms_array = $_formShortcode;
                }
            }
        }else{
            $_rs['0'] = esc_html__('No Contact Form found', 'text-domanin');
        }

    }

@endphp


<div class='mx-auto section sectionParentComponent component_forms_steps'>
    <div class='sectionsInner'>

        <section class='w-full customSection sectionParent component_forms_steps_0'>

            <div class="inner-section">

                <section class='innerSectionElement sct0'>
                    <div class='containElements'>

                       @if (is_array($forms_array))

                        @foreach ($forms_array as $key => $item)
                            <div class="formElement @if ($key == 0) active @endif">
                                {!! do_shortcode($item) !!}
                            </div>
                        @endforeach

                        @else

                        <div class="formElement active">
                            {!! do_shortcode($forms_array) !!}
                        </div>

                       @endif

                    </div>
                </section>

            </div>

        </section>


    </div>
</div>
