<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2021 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 3
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

if (!nv_function_exists('nv_tra_cuu')) {
    /**
     * nv_tra_cuu()
     *
     * @return string
     */
    function nv_tra_cuu()
    {
        global $global_config, $module_info, $lang_global, $module_name, $op, $user_info, $db;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.tra_cuu.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.tra_cuu.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }


        $xtpl = new XTemplate('global.tra_cuu.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');
        $query = "select thu, ngay, tenmon , tiettheoct, tenbai, tenhsnghi, nhanxet
from ppct join thu on ppct.mathu = thu.mathu
join lopmonhoc on lopmonhoc.malopmh = ppct.malopmh 
join monhoc on monhoc.mamon = lopmonhoc.mamon
join lopquanly on lopquanly.malopql = lopmonhoc.malopql 
where lopquanly.malopql = 4
order by thu asc, tiet asc";

        $result = $db->query($query);
        while ($row = $result->fetch()) {
            $Tiet = 'Tiet'.((string) $row['tiet']) . "_". ((string) $row['thu']);
            $NoiDung = $row['tenmon'] . " - " . $row['tlop'];
            $xtpl->assign($Tiet, $NoiDung);

        }


        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_tra_cuu();
}
