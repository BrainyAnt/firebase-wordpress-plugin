<?php
  class Firebase {
    private static $initiated = false;
    private static $options;    

    public static function init() {
      if( ! self::$initiated ){
        self::init_hooks();
      }
    }

    public static function init_hooks() {
      self::$initiated = true;
      self::$options = get_option("firebase_credentials");
    
      add_action( 'wp_enqueue_scripts', array( 'Firebase', 'load_firebase_js' ) );
    }

    public static function load_firebase_js() {

      wp_enqueue_style( 'firebase', plugin_dir_url( dirname(__FILE__) ) . 'css/firebase.css' );

      wp_enqueue_script( 'firebase_app', 'https://www.gstatic.com/firebasejs/5.0.4/firebase-app.js', array(), FIREBASE_WP_VERSION, false );
      wp_enqueue_script( 'firebase_auth', 'https://www.gstatic.com/firebasejs/5.0.4/firebase-auth.js', array(), FIREBASE_WP_VERSION, false );

      wp_enqueue_script( 'firebase', plugin_dir_url( dirname(__FILE__) ) . 'js/firebase.js', array('jquery'), FIREBASE_WP_VERSION, false );
      wp_localize_script( 'firebase', 'firebaseOptions', array(
               'apiKey'       => self::$options['api_key'],
               'authDomain'   => self::$options['auth_domain'],
               'databaseURL'  => self::$options['database_url'],
               'projectId'    => self::$options['project_id']
           )
       );
    }
    
    public static function get_logged_in() {
      global $wpdb;
      // Check if users is already logged in
      if ( is_user_logged_in() ) {
          echo 'You are already logged in';
          die;
      }

      //We shall SQL escape all inputs
      $username = $wpdb->escape($_REQUEST['user_name']);
      $password = $wpdb->escape($_REQUEST['user_password']);
      $remember = $wpdb->escape($_REQUEST['user_remember']);

      $creds = array();
      $creds['user_login'] = $username;
      $creds['user_password'] = $password;
      $creds['remember'] = $remember;
      $user_signon = wp_signon( $creds, false );

      // Check if error
      if ( is_wp_error($user_signon)) {
        echo $user_verify->get_error_code();
        exit();
      } else {
        echo 'ok';
        exit;
      }
    }
  }
?>
