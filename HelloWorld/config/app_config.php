<?php

/*
 *  コンフィグレーションクラス
 */
class AppConfig
{
    const INI_FILE_NM = 'app.ini';

    // アプリケーション設定変数
    private $_app_config;

    /**
     * コンストラクタ
     */
    public function __construct() {
        // 設定ファイル読込
        $this->load();
    }

    /**
     * 設定ファイルをロードする
     * @param なし
     * @throws Exception
     * @return なし
     */
    private function load() {
        try {
            $this->_app_config = parse_ini_file(self::INI_FILE_NM, true);
        } catch (Exception $e) {
            var_dump($e->getMessage());
            throw $e;
        }
    }

    /**
     * キー指定で設定ファイルの値を取得する
     * @param  $key
     * @throws Exception
     * @return unknown
     */
    private function get_by_key($key) {
        if (!isset($this->_app_config[$key])) {
            var_dump('指定したキーは設定ファイルに定義されていません。キー = ['.$key.']');
            throw new Exception('指定したキーは設定ファイルに定義されていません。キー = ['.$key.']');
        }

        return $this->_app_config[$key];
    }

    /**
     * キー、セクション指定で設定ファイルの値を取得する
     * @param  キー：$key、セクション：$section
     * @throws Exception
     * @return unknown
     */
    private function get_by_section($section, $key) {
        if (!isset($this->_app_config[$section])) {
            var_dump('指定したセクションは設定ファイルに定義されていません。セクション = ['.$section.']');
            throw new Exception('指定したセクションは設定ファイルに定義されていません。セクション = ['.$section.']');
        }

        if (!isset($this->_app_config[$section][$key])) {
            var_dump('指定したキーは設定ファイルに定義されていません。キー = ['.$key.']');
            throw new Exception('指定したキーは設定ファイルに定義されていません。キー = ['.$key.']');
        }

        return $this->_app_config[$section][$key];
    }

    /**
     * 設定ファイルの値を取得する
     * @param キー： $key、セクション： $section
     * @throws Exception
     * @return 設定ファイルの値
     */
    public function get() {
        $ret;
        $args  = func_get_args();

        switch(func_num_args()) {
            case 1:
                $ret = $this->get_by_key($args[0]);
                break;
            case 2:
                $ret = $this->get_by_section($args[0], $args[1]);
                break;
            default:
                throw new Exception('パラメータはキーのみ、または、キーとセクションのいずれかを指定してください');
                break;

        }

        return $ret;
    }

    /**
     * 設定ファイルのキーバリュー配列を取得する
     * @return 設定ファイルのキーバリュー配列
     */
    public function get_app_config() {
        return $this->_app_config;
    }
}
?>