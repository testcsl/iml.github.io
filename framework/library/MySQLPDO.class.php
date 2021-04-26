<?php 
	//设置字符集
	header('Content-type:text/html;charset=utf-8');

	//基于PDO扩展的MySQL数据库操作类
	class MySQLPDO {

		protected static $db = null;					//保存PDO实例
		protected $data = array();						//保存操作数据

		public function __construct() {
			isset(self::$db) || self::_connect();		//PDO单例模式
		}

		private function __clone() {}					//禁止克隆

		//连接目标服务器(本方法只在构造方法中调用一次)
		private static function _connect() {
			$config = C('DB_CONFIG');				//通过全局变量获取数据库配置信息
			//准备PDO的DSN连接信息
			$dsn = "{$config['db']}:host={$config['host']};port={$config['port']};dbname={$config['dbname']};charset={$config['charset']}";
			try {										//连接数据库
				self::$db = new PDO( $dsn, $config['user'], $config['pass'] );
			} catch(PDOException $e) {
				//连接失败，输出异常信息
				E('连接数据库失败：'.$e->getMessage());
			}
		}
		/**
		 * 通过预处理方式执行SQL
		 * @param string $sql 执行的SQL语句模板
		 * @param bool $batch 是否批量操作
		 * @return object PDOStatement
		 */
		public function query ( $sql, $batch = false ) {
			//取出成员属性中的数据并清空
			$data = $batch ? $this->data : array( $this->data );
			$this->data = array();
			//通过预处理方式执行SQL
			$stmt = self::$db->prepare( $sql );
			foreach($data as $v) {
				if ( $stmt->execute($v) === false ) {
					exit('数据库操作失败：'.implode('-', $stmt->errorInfo()));
				}
			}
			return $stmt;
		}
		/**
		 * 保存操作数据
		 * @param array $data 需要保存的数据
		 * @return 返回对象自身用于链式调用
		 */
		public function data ($data) {
			$this->data = $data;
			return $this;
		}
		//取得一行结果
		public function fetchRow ($sql) {
			return $this->query($sql)->fetch(PDO::FETCH_ASSOC);
		}
		//取得所有结果
		public function fetchAll ($sql) {
			return $this->query($sql)->fetchAll(PDO::FETCH_ASSOC);
		}
		//取得一列结果
		public function fetchColumn ($sql) {
			return $this->query($sql)->fetchColumn();
		}
		//获取最后插入的ID
		public function lastInsertId() {
			return self::$db->lastInsertId();
		}
	}
	
 ?>