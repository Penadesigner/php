<?php
function meuPersonalizador($wp_customize){
    // -------- SEÇÃO SERVIÇOS
    $wp_customize->add_section( 'sec_servico', array(
        'title' => 'Serviços',
        'description' => 'Adicione Serviços',
    ));


    // Serviço 1
    // Titulo
    $wp_customize->add_setting( 'set_servico1_title', array(
        'default' => '',
    ));
    $wp_customize->add_control( 'contr_servico1_title', array(
        'label' => 'Ajustar Titulo',
        'type' => 'text',
        'section' => 'sec_servico',
        'settings' => 'set_servico1_title',
        'desciption' => 'Informe o titulo da imagem'
    ));
    // Descricao
    $wp_customize->add_setting( 'set_servico1_descr', array(
        'default' => '',
    ));
    $wp_customize->add_control( 'contr_servico1_descr', array(
        'label' => 'Ajustar Descrição',
        'type' => 'textarea',
        'section' => 'sec_servico',
        'settings' => 'set_servico1_descr',
        'desciption' => 'Informe o texto da imagem'
    ));
    // Imagem
    $wp_customize->add_setting( 'set_servico1', array(
        'type' => 'theme_mod',
        'default' => 'Serviços',
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'contr_servico1', array(
        'label' => 'Imagem serviço 1',
        'height' => 200,
        'width' => 200,
        'section' => 'sec_servico',
        'settings' => 'set_servico1'
    )));

    // Serviço 2
    // Titulo
    $wp_customize->add_setting( 'set_servico2_title', array(
        'default' => '',
    ));
    $wp_customize->add_control( 'contr_servico2_title', array(
        'label' => 'Ajustar Titulo',
        'type' => 'text',
        'section' => 'sec_servico',
        'settings' => 'set_servico2_title',
        'desciption' => 'Informe o titulo da imagem'
    ));
    // Descricao
    $wp_customize->add_setting( 'set_servico2_descr', array(
        'default' => '',
    ));
    $wp_customize->add_control( 'contr_servico2_descr', array(
        'label' => 'Ajustar Descrição',
        'type' => 'textarea',
        'section' => 'sec_servico',
        'settings' => 'set_servico2_descr',
        'desciption' => 'Informe o texto da imagem'
    ));
    // Imagem
    $wp_customize->add_setting( 'set_servico2', array(
        'type' => 'theme_mod',
        'default' => 'Copyright',
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'contr_servico2', array(
        'label' => 'Imagem serviço 2',
        'height' => 200,
        'width' => 200,
        'section' => 'sec_servico',
        'settings' => 'set_servico2'
    )));

     // Serviço 3
     // Titulo
    $wp_customize->add_setting( 'set_servico3_title', array(
        'default' => '',
    ));
    $wp_customize->add_control( 'contr_servico3_title', array(
        'label' => 'Ajustar Titulo',
        'type' => 'text',
        'section' => 'sec_servico',
        'settings' => 'set_servico3_title',
        'desciption' => 'Informe o titulo da imagem'
    ));
    // Descricao
    $wp_customize->add_setting( 'set_servico3_descr', array(
        'default' => '',
    ));
    $wp_customize->add_control( 'contr_servico3_descr', array(
        'label' => 'Ajustar Descrição',
        'type' => 'textarea',
        'section' => 'sec_servico',
        'settings' => 'set_servico3_descr',
        'desciption' => 'Informe o texto da imagem'
    ));
    // Imagem
     $wp_customize->add_setting( 'set_servico3', array(
        'type' => 'theme_mod',
        'default' => 'Copyright',
    ));
    $wp_customize->add_control( new WP_Customize_Cropped_Image_Control ( $wp_customize, 'contr_servico3', array(
        'label' => 'Imagem serviço 3',
        'height' => 200,
        'width' => 200,
        'section' => 'sec_servico',
        'settings' => 'set_servico3'
    )));
    
    /* ------------------------------------------- */

    // -------- SEÇÃO COPY
    $wp_customize->add_section( 'sec_copy', array(
        'title' => 'Copyright',
        'description' => 'Seção do rodape',
    ));

    $wp_customize->add_setting( 'set_copy', array(
        'type' => 'theme_mod',
        'default' => 'Copyright',
    ));
    $wp_customize->add_control( 'contr_copy', array(
        'label' => 'Ajustar Copyright',
        'type' => 'text',
        'section' => 'sec_copy',
        'settings' => 'set_copy',
        'desciption' => 'Informe o copyright'
    ));

    /* ------------------------------------------- */

    // -------- SECAO TELEFONE
    $wp_customize->add_section( 'sec_telefone', array(
        'title' => 'Numero de Telefone',
        'description' => 'Seção do rodape',
    ));

    $wp_customize->add_setting( 'set_telefone', array(
        'type' => 'theme_mod',
        'default' => '(00)',
    ));
    $wp_customize->add_control( 'contr_telefone', array(
        'label' => 'Ajustar Telefone',
        'type' => 'text',
        'section' => 'sec_telefone',
        'settings' => 'set_telefone',
        'desciption' => 'Informe o numero de telefone'
    ));

        // -------- SECAO EMAIL
        $wp_customize->add_section( 'sec_email', array(
            'title' => 'E-mail para contato',
            'description' => 'Seção do rodape',
        ));
    
        $wp_customize->add_setting( 'set_email', array(
            'type' => 'theme_mod',
            'default' => '',
        ));
        $wp_customize->add_control( 'contr_email', array(
            'label' => 'Ajustar Email',
            'type' => 'text',
            'section' => 'sec_email',
            'settings' => 'set_email',
            'desciption' => 'Informe o e-mail'
        ));



}
add_action( 'customize_register', 'meuPersonalizador' );