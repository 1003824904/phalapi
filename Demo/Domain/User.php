<?php

class Domain_User {

    public function getBaseInfo($userId) {
        $rs = array();

        $userId = intval($userId);
        if ($userId <= 0) {
            return $rs;
        }

		// �汾1���򵥵Ļ�ȡ
        $model = new Model_User();
        $rs = $model->getByUserId($userId);

		// �汾2��ʹ�õ��㻺��/�༶����
		/**
		$key = 'userbaseinfo_' . $userId;
		$rs = DI()->cache->get($key);
		if ($rs === NULL) {
			$rs = $model->getByUserId($userId);
			DI()->cache->set($key, $rs, 600);
		}
		*/

		// �汾3������ + ����
		/**
		$query = new PhalApi_ModelQuery();
		$query->id = $userId;
		$modelProxy = new ModelProxy_UserBaseInfo();
		$rs = $modelProxy->getData($query);
		*/

        return $rs;
    }
}
