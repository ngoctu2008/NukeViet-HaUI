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

if (!nv_function_exists('nv_tkb')) {
    /**
     * nv_module_menu()
     *
     * @return string
     */
    function nv_tkb()
    {
        global $global_config, $module_info, $lang_global, $module_name, $op, $user_info, $db;

        if (file_exists(NV_ROOTDIR . '/themes/' . $global_config['module_theme'] . '/blocks/global.TKB.tpl')) {
            $block_theme = $global_config['module_theme'];
        } elseif (file_exists(NV_ROOTDIR . '/themes/' . $global_config['site_theme'] . '/blocks/global.TKB.tpl')) {
            $block_theme = $global_config['site_theme'];
        } else {
            $block_theme = 'default';
        }


        $xtpl = new XTemplate('global.TKB.tpl', NV_ROOTDIR . '/themes/' . $block_theme . '/blocks');

        $sql = "select tiet, thu, tenmon, concat(lopquanly.lop, tenlop) as 'tlop'
from ppct join thu on ppct.mathu = thu.mathu
join lopmonhoc on lopmonhoc.malopmh = ppct.malopmh 
join monhoc on monhoc.mamon = lopmonhoc.mamon
join lopquanly on lopquanly.malopql = lopmonhoc.malopql 
where ppct.magv = 1
order by thu asc, tiet asc
";
        $result = $db->query($sql);
        while ($row = $result->fetch()) {
            $Tiet = 'Tiet'.((string) $row['tiet']) . "_". ((string) $row['thu']);
            $NoiDung = $row['tenmon'] . " - " . $row['tlop'];
            $xtpl->assign($Tiet, $NoiDung);

        }

/*        for ($tiet = 1; $tiet<=10; $tiet++) {
            $i = "Tiet".((string)$tiet)."_2";
            $xtpl->assign($i, "Tai");
        }
*/
        $xtpl->parse('main');

        return $xtpl->text('main');
    }
}

if (defined('NV_SYSTEM')) {
    $content = nv_tkb();
}
