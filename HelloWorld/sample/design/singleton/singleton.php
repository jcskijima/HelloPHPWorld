<?php

class Singleton
{
	/* 唯一のインスタンスを証明するID */
	private $_id;

	/* クラス変数として利用した場合の変数 */
    protected static $_instance;

    /* サンプル動作確認用の変数 */
    protected $_application_name = 'Hellow World';

    /**
     * コンストラクタ（インスタンス生成不可）
     */
    private function __construct() {
    	$this->id = md5(date('r') . mt_rand());
    }

    /**
     * クラス変数として利用した場合の例
     * @return Singleton
     */
    public static function getInstance() {
    	if (!isset(self::$_instance)) {
    		self::$_instance = new Singleton();
    	}

    	return self::$_instance;
    }

    /**
     * ローカル変数として利用した場合の例（※staticなので1度のみ初期化される）
     * @return Ambigous <NULL, Singleton>
     */
    public static function getInstance2() {
    	static $_i2 = null;

    	if (!isset($_i2)) {
    		$_i2 = new Singleton();
    	}

    	return $_i2;
    }

    /**
     * アプリケーション動作確認用
     * @param unknown $name
     */
    public function setApplicationName($name) {
    	$this->_application_name = $name;
    }

    /**
     * アプリケーション動作確認用
     * @param unknown $name
     */
    public function getApplicationName() {
    	return $this->_application_name;
    }

    /**
     * アプリケーション動作確認用
     * @param unknown $name
     */
    public function getClassName() {
    	return get_class($this); // or __CLASS__
    }

    /**
     * アプリケーション動作確認用
     * @param unknown $name
     */
    public function getId() {
    	return $this->_id;
    }

    /**
     * クローン（クローン生成不可）
     * @param unknown $name
     */
    private function __clone() {
    	throw new RuntimeException ('Clone is not allowed against ' .get_class($this));
    }

    /**
     * ウェイクアップ（シリアライズ不可）
     * @param unknown $name
     */
    private function __wakeup() {
    	throw new RuntimeException ('Wakeup is not allowed against ' .get_class($this));
    }
}

