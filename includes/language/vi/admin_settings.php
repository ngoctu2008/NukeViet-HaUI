<?php

/**
 * NukeViet Content Management System
 * @version 4.x
 * @author VINADES.,JSC <contact@vinades.vn>
 * @copyright (C) 2009-2022 VINADES.,JSC. All rights reserved
 * @license GNU/GPL version 3
 * @see https://github.com/nukeviet The NukeViet CMS GitHub project
 */

if (!defined('NV_ADMIN') or !defined('NV_MAINFILE')) {
    exit('Stop!!!');
}

$lang_translator['author'] = 'VINADES.,JSC <contact@vinades.vn>';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2009-2021 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['global_config'] = 'Cấu hình chung';
$lang_module['site_config'] = 'Cấu hình site';
$lang_module['lang_site_config'] = 'Cấu hình site Theo ngôn ngữ: %s';
$lang_module['bots_config'] = 'Máy chủ tìm kiếm';
$lang_module['ip_version'] = 'Loại IP';

$lang_module['site_domain'] = 'Tên miền chính của site';
$lang_module['sitename'] = 'Tên gọi của site';
$lang_module['theme'] = 'Giao diện mặc định cho PC';
$lang_module['mobile_theme'] = 'Giao diện mặc định cho Mobile';
$lang_module['themeadmin'] = 'Giao diện người quản trị';
$lang_module['default_module'] = 'Module mặc định trên trang chủ';
$lang_module['description'] = 'Mô tả của site';
$lang_module['rewrite'] = 'Bật chức năng rewrite';
$lang_module['rewrite_optional'] = 'Loại bỏ kí tự ngôn ngữ trên url';
$lang_module['rewrite_op_mod'] = 'Loại bỏ tên module trên url';
$lang_module['disable_content'] = 'Nội dung thông báo site ngưng hoạt động';
$lang_module['submit'] = 'Lưu cấu hình';
$lang_module['err_writable'] = 'Lỗi hệ thống không ghi được file: %s bạn cần cấu hình server cho phép ghi file này.';
$lang_module['err_supports_rewrite'] = 'Lỗi, Máy chủ của bạn không hỗ trợ module rewrite';
$lang_module['err_save_sysconfig'] = 'Các thay đổi đã được lưu lại tuy nhiên hệ thống không ghi được cấu hình ra file. Hãy cấp quyền ghi cho file %s sau đó thực hiện lại';

$lang_module['security'] = 'Thiết lập an ninh';
$lang_module['flood_blocker'] = 'Chống flood';
$lang_module['is_flood_blocker'] = 'Kích hoạt tính năng chống flood';
$lang_module['max_requests_60'] = 'Số requests tối đa trong 1 phút';
$lang_module['max_requests_300'] = 'Số requests tối đa trong 5 phút';
$lang_module['max_requests_error'] = 'Lỗi: Cần nhập số request lớn hơn 0';
$lang_module['nv_anti_iframe'] = 'Chống IFRAME';
$lang_module['nv_anti_agent'] = 'Kiểm tra và chặn các máy tính nếu agent không có';
$lang_module['nv_allowed_html_tags'] = 'Mã HTML được chấp nhận sử dụng trong hệ thống';
$lang_module['nv_debug'] = 'Chế độ nhà phát triển';
$lang_module['nv_debug_help'] = 'Nếu bật tùy chọn này, hệ thống sẽ hiển thị các lỗi để giúp nhà phát triển dễ dàng kiểm tra trong quá trình lập trình. Nếu website đang hoạt động trên môi trường thật, bạn <strong>nên tắt</strong> tùy chọn này';
$lang_module['domains_restrict'] = 'Giới hạn tên miền ở các thẻ HTML nguy hiểm (iframe, object, embed...)';
$lang_module['domains_whitelist'] = 'Tên miền tin cậy (mỗi tên miền một dòng). Nếu kích hoạt giới hạn tên miền ở mục bên trên, hệ thống sẽ cho phép sử dụng tài nguyên, liên kết từ các tên miền này';
$lang_module['captcha'] = 'Cấu hình hiển thị captcha';
$lang_module['captcha_num'] = 'Số ký tự của captcha hình';
$lang_module['captcha_size'] = 'Kích thước của captcha hình';
$lang_module['recaptcha_ver'] = 'Phiên bản reCaptcha';
$lang_module['recaptcha_sitekey'] = 'Site key của reCaptcha';
$lang_module['recaptcha_secretkey'] = 'Secret key của reCaptcha';
$lang_module['recaptcha_type'] = 'Kiểu reCaptcha (chỉ cho phiên bản 2)';
$lang_module['recaptcha_type_image'] = 'Hình ảnh (nên chọn)';
$lang_module['recaptcha_type_audio'] = 'Âm thanh';
$lang_module['recaptcha_guide'] = 'Nhấp vào đây để lấy thông số Site key và Secret key.';
$lang_module['captcha_for_module'] = 'Kiểu captcha được áp dụng cho các module';
$lang_module['captcha_'] = 'Không sử dụng';
$lang_module['captcha_captcha'] = 'Captcha hình';
$lang_module['captcha_recaptcha'] = 'reCaptcha';
$lang_module['captcha_type_recaptcha_note'] = 'reCaptcha sẽ bị thay bằng Captcha hình cho đến khi bạn khai báo Site key và Secret key của reCaptcha';
$lang_module['select_all_as'] = 'Chọn tất cả là';
$lang_module['captcha_area'] = 'Khu vực áp dụng captcha của module Thành viên';
$lang_module['captcha_area_a'] = 'Admin đăng nhập';
$lang_module['captcha_area_l'] = 'Thành viên đăng nhập';
$lang_module['captcha_area_r'] = 'Khách đăng ký';
$lang_module['captcha_area_m'] = 'Khách khôi phục mail kích hoạt';
$lang_module['captcha_area_p'] = 'Khách thay mật khẩu';
$lang_module['captcha_comm'] = 'Đối tượng áp dụng captcha khi tham gia Bình luận';
$lang_module['captcha_comm_0'] = 'Không hiển thị';
$lang_module['captcha_comm_1'] = 'Nếu không phải là thành viên';
$lang_module['captcha_comm_2'] = 'Nếu không phải người quản lý bình luận';
$lang_module['captcha_comm_3'] = 'Hiển thị trong mọi trường hợp';
$lang_module['captcha_comm_select'] = 'Hãy chọn';

$lang_module['mail_sender_name'] = 'Tên người gửi';
$lang_module['mail_sender_name_default'] = 'Để trống hệ thống sẽ lấy từ giá trị được chỉ định (nếu có) hoặc tên site';
$lang_module['mail_sender_email'] = 'Email người gửi';
$lang_module['mail_sender_email_default'] = 'Để trống hệ thống sẽ lấy từ giá trị được chỉ định, email hệ thống hoặc email site tùy phương thức gửi mail. Lưu ý: Giá trị này có thể không có tác dụng tùy theo máy chủ gửi hoặc máy chủ nhận';
$lang_module['mail_reply_name'] = 'Tên người nhận phản hồi';
$lang_module['mail_reply_name_default'] = 'Khi không có tham số truyền vào lúc gửi mail, hệ thống sẽ lấy giá trị này. Bỏ trống hệ thống sẽ lấy từ tên site';
$lang_module['mail_reply_email'] = 'Email nhận phản hồi';
$lang_module['mail_reply_email_default'] = 'Khi không có tham số truyền vào lúc gửi mail, hệ thống sẽ lấy giá trị này. Bỏ trống hệ thống sẽ lấy từ email của site';
$lang_module['mail_force_sender'] = 'Cố định người gửi. Dùng để ép tất cả thông tin người gửi có giá trị theo cấu hình tại đây thay vì thông tin trong mỗi lần gửi';
$lang_module['mail_force_reply'] = 'Cố định người nhận phản hồi. Dùng để ép tất cả thông tin người nhận phản hồi có giá trị theo cấu hình tại đây thay vì thông tin trong mỗi lần gửi';
$lang_module['ftp_config'] = 'Cấu hình FTP';
$lang_module['smtp_config'] = 'Cấu hình gửi mail';
$lang_module['server'] = 'Server or Url';
$lang_module['port'] = 'Port';
$lang_module['username'] = 'User name';
$lang_module['password'] = 'Password';
$lang_module['ftp_path'] = 'Remote path';
$lang_module['mail_config'] = 'Lựa chọn phương thức';
$lang_module['type_smtp'] = 'SMTP';
$lang_module['type_linux'] = 'Linux Mail';
$lang_module['type_phpmail'] = 'PHPmail';
$lang_module['smtp_server'] = 'Cấu hình máy chủ gửi mail';
$lang_module['incoming_ssl'] = 'Sử dụng Xác thực';
$lang_module['verify_peer_ssl'] = 'Ssl verify peer';
$lang_module['verify_peer_ssl_yes'] = 'Có';
$lang_module['verify_peer_ssl_no'] = 'Không';
$lang_module['verify_peer_name_ssl'] = 'Ssl verify name peer';
$lang_module['outgoing'] = 'Máy chủ (SMTP) Thư Gửi đi';
$lang_module['outgoing_port'] = 'Cổng gửi mail';
$lang_module['smtp_username'] = 'Tài khoản gửi mail';
$lang_module['smtp_login'] = 'Tên Tài khoản';
$lang_module['smtp_pass'] = 'Mật khẩu';
$lang_module['smtp_error_openssl'] = 'Lỗi: Máy chủ của bạn không hỗ trợ gửi mail qua ssl';
$lang_module['smtp_test'] = 'Kiểm tra cấu hình';
$lang_module['smtp_test_subject'] = 'Email thử nghiệm';
$lang_module['smtp_test_message'] = 'Đây là email thử nghiệm để kiểm tra cấu hình gửi mail. Đơn giản bạn hãy xóa nó đi!';
$lang_module['smtp_test_success'] = 'Gửi email thành công';
$lang_module['smtp_test_fail'] = 'Gửi email thất bại';
$lang_module['smtp_test_note'] = 'Lưu ý: Nhấp lưu cấu hình nếu có thay đổi ở form trên trước khi kiểm tra cấu hình';
$lang_module['notify_email_error'] = 'Tạo cảnh báo hệ thống khi gửi email thất bại';
$lang_module['bot_name'] = 'Tên máy chủ ';
$lang_module['bot_agent'] = 'UserAgent của máy chủ';
$lang_module['bot_ips'] = 'IP của máy chủ';
$lang_module['bot_allowed'] = 'Quyền xem';
$lang_module['site_keywords'] = 'Từ khóa cho máy chủ tìm kiếm';
$lang_module['site_logo'] = 'Tên file logo của site';
$lang_module['site_banner'] = 'Tên file banner của site';
$lang_module['site_favicon'] = 'Tên file favicon của site';
$lang_module['site_email'] = 'Email của site';
$lang_module['error_set_logs'] = 'Ghi lại lỗi của hệ thống';
$lang_module['error_send_email'] = 'Email nhận thông báo lỗi';
$lang_module['lang_multi'] = 'Kích hoạt chức năng đa ngôn ngữ';
$lang_module['lang_geo'] = 'Kích hoạt chức năng xác định ngôn ngữ theo quốc gia';
$lang_module['lang_geo_config'] = 'Cấu hình chức năng xác định ngôn ngữ theo quốc gia';
$lang_module['site_lang'] = 'Ngôn ngữ mặc định';
$lang_module['site_timezone'] = 'Múi giờ của site';
$lang_module['current_time'] = 'Giờ hiện tại: %s';
$lang_module['date_pattern'] = 'Kiểu hiển thị ngày tháng năm';
$lang_module['time_pattern'] = 'Kiểu hiển thị giờ phút';
$lang_module['gzip_method'] = 'Bật chế độ gzip';
$lang_module['proxy_blocker'] = 'Kiểm tra và chặn các máy tính dùng proxy';
$lang_module['proxy_blocker_0'] = 'Không kiểm tra';
$lang_module['proxy_blocker_1'] = 'Kiểm tra nhẹ';
$lang_module['proxy_blocker_2'] = 'Kiểm tra vừa';
$lang_module['proxy_blocker_3'] = 'Kiểm tra tuyệt đối';
$lang_module['str_referer_blocker'] = 'Kích hoạt tiện ích kiểm tra và chuyển hướng các REFERER bên ngoài đến trang chủ';
$lang_module['my_domains'] = 'Các domain chạy site, cách nhau bởi dấu phảy';
$lang_module['searchEngineUniqueID'] = 'Google search Engine ID<br />(Có dạng 000329275761967753447:sr7yxqgv294 , <a href="http://nukeviet.vn/vi/faq/Su-dung-Google-Custom-Search-tren-NukeViet/" target="_blank">xem chi tiết</a>)';

$lang_module['variables'] = 'Cấu hình cookie session';
$lang_module['cookie_prefix'] = 'Tiến tố cookie';
$lang_module['session_prefix'] = 'Tiền tố session';
$lang_module['live_cookie_time'] = 'Thời gian tồn tại của cookie';
$lang_module['live_session_time'] = 'Thời gian tồn tại session';
$lang_module['live_session_time0'] = '=0 Tồn tại đến khi đóng trình duyệt';
$lang_module['cookie_secure'] = 'cookie secure';
$lang_module['cookie_httponly'] = 'cookie httponly';
$lang_module['cookie_SameSite'] = 'cookie SameSite';
$lang_module['cookie_secure_note'] = 'Cookie chỉ được gửi đến máy chủ khi một yêu cầu được thực hiện với giao thức https hoặc ở môi trường localhost';
$lang_module['cookie_httponly_note'] = 'Cấm JavaScript truy cập vào cookie, ví dụ thông qua thuộc tính Document.cookie';
$lang_module['cookie_SameSite_note'] = 'Cho phép kiểm soát việc trình duyệt gửi cookie khi trang gửi yêu cầu đến một miền khác';
$lang_module['cookie_SameSite_note2'] = 'Thuộc tính này chỉ có hiệu lực khi phiên bản php của máy chủ >= 7.3';
$lang_module['cookie_SameSite_Empty'] = 'Phụ thuộc vào trình duyệt';
$lang_module['cookie_SameSite_Lax'] = 'Cookie không được gửi theo các yêu cầu phụ đến trang web khác (ví dụ: tải hình ảnh), nhưng được gửi theo các yêu cầu đến trang web gốc';
$lang_module['cookie_SameSite_Strict'] = 'Cookie sẽ chỉ được gửi theo yêu cầu được thực hiện trên cùng một miền và sẽ không được gửi theo yêu cầu đến các trang web của bên thứ ba';
$lang_module['cookie_SameSite_None'] = 'Cookie sẽ được gửi trong tất cả các ngữ cảnh (Chỉ có tác dụng khi thuộc tính secure bật)';

$lang_module['is_user_forum'] = 'Chuyển quản lý thành viên cho diễn đàn';
$lang_module['banip'] = 'Quản lý IP cấm';
$lang_module['banip_ip'] = 'Ip';
$lang_module['banip_timeban'] = 'Thời gian bắt đầu';
$lang_module['banip_timeendban'] = 'Thời gian kết thúc';
$lang_module['banip_funcs'] = 'Chức năng';
$lang_module['banip_checkall'] = 'Chọn tất cả';
$lang_module['banip_uncheckall'] = 'Bỏ chọn tất cả';
$lang_module['banip_title_add'] = 'Thêm địa chỉ IP cấm';
$lang_module['banip_title_edit'] = 'Sửa địa chỉ IP cấm';
$lang_module['banip_address'] = 'Địa chỉ';
$lang_module['banip_begintime'] = 'Thời gian bắt đầu cấm';
$lang_module['banip_endtime'] = 'Thời gian bắt kết thúc';
$lang_module['banip_notice'] = 'Ghi chú';
$lang_module['banip_confirm'] = 'Chấp nhận';
$lang_module['banip_mask_select'] = 'Hãy chọn';
$lang_module['banip_area'] = 'Khu vực';
$lang_module['banip_nolimit'] = 'Vô thời hạn';
$lang_module['banip_area_select'] = 'Hãy chọn khu vực';
$lang_module['banip_noarea'] = 'Chưa xác định';
$lang_module['banip_del_success'] = 'Đã xóa thành công !';
$lang_module['banip_area_front'] = 'Ngoài site';
$lang_module['banip_area_admin'] = 'Khu vực admin';
$lang_module['banip_area_both'] = 'Cả admin và ngoài site';
$lang_module['banip_delete_confirm'] = 'Bạn có chắc muốn xóa ip này ra khỏi danh sách bị ban?';
$lang_module['banip_mask'] = 'Mask IP';
$lang_module['banip_edit'] = 'Sửa';
$lang_module['banip_delete'] = 'Xóa';
$lang_module['banip_error_ip'] = 'Hãy nhập Ip cần ban';
$lang_module['banip_error_area'] = 'Bạn cần chọn khu vực';
$lang_module['banip_error_validip'] = 'Lỗi: Bạn cần nhập IP đúng chuẩn';
$lang_module['banip_error_write'] = 'Lỗi: Bạn đã không cấp quyền để hệ thống có thể ghi file, hãy CHMOD thư mục <strong>%s</strong> ở chế độ 0777 hoặc "Change permission" để hệ thống có thể ghi file, nếu không hãy tạo file banip.php với nội dung bên dưới và đặt vào thư mục <strong>%s</strong>';

$lang_module['nv_admin_add'] = 'Thêm công việc';
$lang_module['nv_admin_edit'] = 'Sửa công việc';
$lang_module['nv_admin_del'] = 'Xóa công việc';
$lang_module['cron_name_empty'] = 'Bạn chưa khai báo tên của công việc';
$lang_module['file_not_exist'] = 'File mà bạn khai báo không tồn tại';
$lang_module['func_name_invalid'] = 'Bạn chưa khai báo tên hàm hoặc tên hàm không đúng quy định';
$lang_module['func_name_not_exist'] = 'Tên hàm bạn khai báo không tồn tại';
$lang_module['nv_admin_add_title'] = 'Để thêm công việc, bạn cần khai báo đầy đủ vào các ô trống dưới đây';
$lang_module['nv_admin_edit_title'] = 'Để sửa công việc, bạn cần khai báo đầy đủ vào các ô trống dưới đây';
$lang_module['cron_name'] = 'Tên công việc';
$lang_module['file_none'] = 'Không kết nối';
$lang_module['run_file'] = 'Kết nối với file thực thi';
$lang_module['run_file_info'] = 'File thực thi phải là một trong những file được chứa trong thư mục &ldquo;<strong>includes/cronjobs/</strong>&rdquo;';
$lang_module['run_func'] = 'Kết nối với hàm thực thi';
$lang_module['run_func_info'] = 'Hàm thực thi phải được bắt đầu bằng &ldquo;<strong>cron_</strong>&rdquo;';
$lang_module['params'] = 'Thông số';
$lang_module['params_info'] = 'Phân cách bởi dấu phẩy';
$lang_module['interval'] = 'Lặp lại công việc sau';
$lang_module['interval_info'] = 'Nếu chọn &ldquo;<strong>0</strong>&rdquo;, công việc sẽ được thực hiện 1 lần duy nhất';
$lang_module['start_time'] = 'Thời gian bắt đầu';
$lang_module['min'] = 'phút';
$lang_module['hour'] = 'giờ';
$lang_module['day'] = 'ngày';
$lang_module['month'] = 'tháng';
$lang_module['year'] = 'năm';
$lang_module['is_del'] = 'Xóa sau khi thực hiện xong';
$lang_module['isdel'] = 'Xóa';
$lang_module['notdel'] = 'Không';
$lang_module['is_sys'] = 'Công việc được tạo bởi';
$lang_module['system'] = 'Hệ thống';
$lang_module['client'] = 'Admin';
$lang_module['act'] = 'Tình trạng';
$lang_module['act0'] = 'Vô hiệu lực';
$lang_module['act1'] = 'Hiệu lực';
$lang_module['last_time'] = 'Lần thực hiện gần đây';
$lang_module['next_time'] = 'Lần thực hiện sắp tới';
$lang_module['last_time0'] = 'Chưa thực hiện lần nào';
$lang_module['last_result'] = 'Kết quả của lần thực hiện gần đây';
$lang_module['last_result_empty'] = 'n/a';
$lang_module['last_result0'] = 'Tồi';
$lang_module['last_result1'] = 'Đã hoàn thành';
$lang_module['cron_interval_type'] = 'Kiểu lặp lại (nếu có)';
$lang_module['cron_interval_type0'] = 'Sau thời gian khởi chạy trong CSDL';
$lang_module['cron_interval_type1'] = 'Sau thời gian khởi chạy thực tế';
$lang_module['closed_site'] = 'Chế độ đóng cửa site';
$lang_module['closed_site_0'] = 'Site hoạt động bình thường';
$lang_module['closed_site_1'] = 'Đóng cửa site chỉ có Quản trị tối cao truy cập';
$lang_module['closed_site_2'] = 'Đóng cửa site Người điều hành chung truy cập';
$lang_module['closed_site_3'] = 'Đóng cửa site Tất cả admin truy cập';
$lang_module['closed_site_reopening_time'] = 'Thời gian dự kiến mở lại';
$lang_module['ssl_https'] = 'Chuyển hướng các yêu cầu HTTP sang HTTPS';
$lang_module['ssl_https_module'] = 'Các module kích hoạt SSL';
$lang_module['ssl_https_0'] = 'Không';
$lang_module['ssl_https_1'] = 'Áp dụng trên toàn bộ site';
$lang_module['ssl_https_2'] = 'Áp dụng trong khu vực quản trị';
$lang_module['note_ssl'] = 'Bạn có chắc chắn site bạn hỗ trợ https không? Nếu không hỗ trợ sẽ không truy cập được các khu vực tương ứng sau khi lưu?';
$lang_module['timezoneAuto'] = 'Theo máy tính của khách truy cập';
$lang_module['timezoneByCountry'] = 'Theo quốc gia của khách truy cập';
$lang_module['allow_switch_mobi_des'] = 'Cho phép chuyển đổi giao diện mobile, desktop';
$lang_module['allow_theme_type'] = 'Các loại giao diện được sử dụng';
$lang_module['ftp_auto_detect_root'] = 'Xác định tự động';
$lang_module['ftp_error_full'] = 'Hãy nhập đủ các thông số để tự động nhận diện Remote path';
$lang_module['ftp_error_detect_root'] = 'Không thể tìm thấy thông số nào phù hợp, hãy kiểm tra lại tên đăng nhập và mật khẩu';
$lang_module['ftp_error_support'] = 'Máy chủ của bạn hiện đang chặn hoặc không hỗ trợ thư viện FTP, hãy liên hệ với nhà cung cấp để được kích hoạt.';
$lang_module['static_url'] = 'Hosting chứa các tệp tĩnh';
$lang_module['cdn_url'] = 'Hosting CDN cho javascript, css';
$lang_module['remote_api_access'] = 'Bật Remote API';
$lang_module['remote_api_access_help'] = 'Nếu tắt toàn bộ quyền truy cập API từ bên ngoài sẽ bị chặn. Các API bên trong vẫn sử dụng bình thường';
$lang_module['remote_api_log'] = 'Ghi lại nhật ký Remote API';

$lang_module['plugin'] = 'Thiết lập Plugin';
$lang_module['plugin_info'] = 'Plugin thi phải là file php được chứa trong thư mục &ldquo;<strong>includes/plugin/</strong>&rdquo;. Các Plugin này sẽ luôn luôn chạy cùng hệ thống khi được kích hoạt';
$lang_module['plugin_file'] = 'File thực thi';
$lang_module['plugin_area'] = 'Khu vực';
$lang_module['plugin_area_1'] = 'Trước khi kết nối CSDL';
$lang_module['plugin_area_2'] = 'Trước khi gọi các module (cả quản trị và ngoài site)';
$lang_module['plugin_area_3'] = 'Trước khi website gửi nội dung tới trình duyệt';
$lang_module['plugin_area_4'] = 'Sau khi gọi các module';
$lang_module['plugin_area_5'] = 'Trước khi gọi các module (chỉ ngoài site)';
$lang_module['plugin_number'] = 'Số thứ tự';
$lang_module['plugin_func'] = 'Chức năng';
$lang_module['plugin_add'] = 'Thêm plugin';
$lang_module['plugin_file_delete'] = 'Xóa khỏi hệ thống';

$lang_module['notification_config'] = 'Cấu hình chức năng thông báo';
$lang_module['notification_active'] = 'Hiển thị thông báo khi có hoạt động mới';
$lang_module['notification_autodel'] = 'Tự động xóa thông báo sau thời gian';
$lang_module['notification_autodel_note'] = 'Điền <strong>0</strong> nếu không muốn tự động xóa';
$lang_module['notification_day'] = 'ngày';

$lang_module['is_login_blocker'] = 'Kích hoạt chức năng chặn đăng nhập sai nhiều lần';
$lang_module['login_number_tracking'] = 'Số lần đăng nhập sai tối đa trong khoảng thời gian theo dõi';
$lang_module['login_time_tracking'] = 'Thời gian theo dõi';
$lang_module['login_time_ban'] = 'Thời gian bị cấm đăng nhập';

$lang_module['two_step_verification'] = 'Yêu cầu xác thực đăng nhập hai bước tại';
$lang_module['two_step_verification0'] = 'Không yêu cầu';
$lang_module['two_step_verification1'] = 'Khu vực quản trị';
$lang_module['two_step_verification2'] = 'Khu vực ngoài site';
$lang_module['two_step_verification3'] = 'Tất cả các khu vực';
$lang_module['two_step_verification_note'] = 'Chú ý: Cấu hình này áp dụng cho toàn bộ tài khoản của các nhóm, nếu cần cấu hình riêng cho từng nhóm hãy chọn giá trị này là <strong>%s</strong> sau đó sửa <a href="%s">nhóm</a> rồi chọn khu vực bắt buộc kích hoạt xác thực hai bước theo ý muốn';
$lang_module['admin_2step_opt'] = 'Các phương thức xác nhận hai bước được phép trong quản trị';
$lang_module['admin_2step_default'] = 'Phương thức xác nhận hai bước mặc định trong quản trị';
$lang_module['admin_2step_appconfig'] = 'Thiết lập ứng dụng tại đây';

$lang_module['site_phone'] = 'Số điện thoại của site';

$lang_module['noflood_ip_add'] = 'Thêm IP bỏ qua kiểm tra flood';
$lang_module['noflood_ip_edit'] = 'Sửa IP bỏ qua kiểm tra flood';
$lang_module['noflood_ip_list'] = 'Các IP bỏ qua kiểm tra flood';

$lang_module['cors'] = 'Thiết lập Cross-Site';
$lang_module['cors_site_restrict'] = 'Bảo vệ ngoài site';
$lang_module['cors_site_restrict_help'] = 'Kích hoạt chức năng này để chặn toàn bộ truy vấn từ bên ngoài vào khu vực ngoài site';
$lang_module['cors_site_valid_domains'] = 'Tên miền hợp lệ ngoài site';
$lang_module['cors_site_valid_ips'] = 'IP hợp lệ ngoài site';
$lang_module['cors_admin_restrict'] = 'Bảo vệ khu vực quản trị';
$lang_module['cors_admin_restrict_help'] = 'Kích hoạt chức năng này để chặn toàn bộ truy vấn từ bên ngoài vào khu vực quản trị';
$lang_module['cors_admin_valid_domains'] = 'Tên miền hợp lệ trong quản trị';
$lang_module['cors_admin_valid_ips'] = 'IP hợp lệ trong quản trị';
$lang_module['cors_valid_domains_help'] = 'Nhập mỗi tên miền một dòng (vui lòng nhập đầy đủ dạng http://yourdomain.com), truy vấn từ các tên miền này được phép thực hiện';
$lang_module['cors_valid_ips_help'] = 'Nhập mỗi IP một dòng, truy vấn từ các IP này được phép thực hiện';
$lang_module['allow_null_origin'] = 'Cho phép truy vấn POST với Origin NULL';
$lang_module['ip_allow_null_origin'] = 'IP được truy vấn POST với Origin NULL';
$lang_module['ip_allow_null_origin_help'] = 'Nhập mỗi IP một dòng, nếu để trống thì tất cả các IP đều được phép';
$lang_module['cookie_notice_popup'] = 'Bật cửa sổ thông báo sử dụng cookie khi người dùng truy cập website lần đầu';
$lang_module['smime_certificate'] = 'Chứng chỉ chữ ký email S/MIME';
$lang_module['smime_cn'] = 'Tên chung của chứng chỉ';
$lang_module['smime_issuer_cn'] = 'Tổ chức phát hành chứng chỉ';
$lang_module['smime_subjectAltName'] = 'Chứng nhận';
$lang_module['smime_validFrom'] = 'Chứng chỉ có giá trị từ';
$lang_module['smime_validTo'] = 'Chứng chỉ có giá trị đến';
$lang_module['smime_signatureTypeSN'] = 'Loại chữ ký';
$lang_module['smime_purposes'] = 'Mục đích';
$lang_module['smime_del'] = 'Xóa';
$lang_module['smime_del_confirm'] = 'Bạn thực sự muốn xóa chứng chỉ này?';
$lang_module['smime_add'] = 'Thêm chứng chỉ';
$lang_module['smime_download'] = 'Tải về';
$lang_module['smime_add_button'] = 'Thực hiện';
$lang_module['smime_pkcs12'] = 'File chứng chỉ (.pfx /.p12)';
$lang_module['smime_passphrase'] = 'Mật khẩu mở khóa tệp chứng chỉ';
$lang_module['smime_download_passphrase'] = 'Tạo mới mật khẩu mở khóa tệp chứng chỉ';
$lang_module['smime_pkcs12_ext_error'] = 'File chứng chỉ phải có phần mở rộng là pfx hoặc p12';
$lang_module['smime_pkcs12_cannot_be_read'] = 'Lỗi: Không thể đọc chứng chỉ';
$lang_module['smime_pkcs12_smimesign_error'] = 'Lỗi: Chứng chỉ không hỗ trợ chữ ký email S/MIME';
$lang_module['smime_pkcs12_overwrite'] = 'Chứng chỉ đã có trên máy chủ. Bạn muốn ghi đè lên bằng file chứng chỉ mới này?';
$lang_module['smime_note'] = 'Chữ ký số S/MIME sẽ được gửi cùng với thư nếu email của người gửi có tệp chứng chỉ được lưu trữ trên máy chủ.';
$lang_module['DKIM_signature'] = 'Chữ ký số của miền gửi thư DKIM';
$lang_module['DKIM_note'] = 'Chữ ký số DKIM sẽ được gửi cùng với thư nếu nó được xác nhận và lưu trữ trên máy chủ.';
$lang_module['DKIM_verified'] = 'DKIM đã được xác nhận';
$lang_module['DKIM_unverified'] = 'DKIM chưa được xác nhận';
$lang_module['DKIM_TXT_host'] = 'Tên của bản ghi TXT';
$lang_module['DKIM_TXT_value'] = 'Giá trị của bản ghi TXT';
$lang_module['dkim_verify'] = 'Xác nhận';
$lang_module['dkim_reverify'] = 'Xác nhận lại';
$lang_module['dkim_del'] = 'Xóa';
$lang_module['dkim_del_confirm'] = 'Bạn thực sự muốn xóa chữ ký số này?';
$lang_module['DKIM_verify_note'] = 'Để xác nhận chữ ký số DKIM, hãy truy cập vào trang quản lý DNS của tên miền, thêm bản ghi TXT với các thông số trên, sau đó click vào nút Xác nhận (Bạn có thể phải chờ để bản ghi mới cập nhật).';
$lang_module['DKIM_add'] = 'Thêm chữ ký số DKIM';
$lang_module['DKIM_add_button'] = 'Thực hiện';
$lang_module['DKIM_domain'] = 'Miền gửi thư';
$lang_module['DKIM_domain_error'] = 'Lỗi: Miền gửi thư không đúng định dạng';
$lang_module['DKIM_domain_exists'] = 'Miền gửi thư này đã có trên máy chủ';
$lang_module['DKIM_created'] = 'Chữ ký số DKIM cho miền gửi thư %s đã được tạo. Bạn cần tiến hành xác nhận chữ ký số DKIM này theo hướng dẫn ở trang tiếp theo.';
$lang_module['dkim_included'] = 'Gửi kèm chữ ký số DKIM (nếu có) khi dùng phương thức';
$lang_module['smime_included'] = 'Gửi kèm chứng chỉ S/MIME (nếu có) khi dùng phương thức';

$lang_module['csp'] = 'Thiết lập CSP';
$lang_module['csp_desc'] = 'Content-Security-Policy (CSP) là tên của tiêu đề phản hồi HTTP (HTTP response header) mà các trình duyệt hiện đại sử dụng để nâng cao tính bảo mật trang web. CSP cho phép bạn hạn chế việc sử dụng các tài nguyên như JavaScript, CSS hoặc bất kỳ thứ gì mà trình duyệt tải.';
$lang_module['csp_details'] = 'Thông tin chi tiết';
$lang_module['csp_note'] = 'Nhập mỗi giá trị một dòng. Nếu giá trị không phải là URL, hãy đặt nó trong dấu nháy đơn (ví dụ: &#039;self&#039;).';
$lang_module['csp_default_src'] = 'Chính sách mặc định, được sử dụng trong mọi trường hợp ngoại trừ trường hợp bị ghi đè bởi một chỉ thị chính xác hơn.';
$lang_module['csp_script_src'] = 'Chính sách dành riêng cho tập lệnh script';
$lang_module['csp_object_src'] = 'Chính sách dành riêng cho các plugin (object, embed hoặc applet)';
$lang_module['csp_style_src'] = 'Chính sách dành riêng cho tập css';
$lang_module['csp_img_src'] = 'Chính sách dành riêng cho hình ảnh (img, nhưng cũng có url() hoặc image() từ CSS, hoặc phần tử liên kết liên quan đến loại hình ảnh (ví dụ: rel = ”icon”)';
$lang_module['csp_media_src'] = 'Chính sách dành riêng cho các tập media (video, audio, source, hoặc track)';
$lang_module['csp_frame_src'] = 'Chính sách dành riêng cho thẻ frame (iframe hoặc frame)';
$lang_module['csp_font_src'] = 'Chính sách dành riêng cho tập phông chữ';
$lang_module['csp_connect_src'] = 'Chính sách dành riêng cho các kết nối từ đối tượng XMLHttpRequest hoặc WebSocket';
$lang_module['csp_form_action'] = 'Xác định các nguồn hợp lệ có thể được sử dụng như một hành động thực thi của biểu mẫu.';
$lang_module['csp_base_uri'] = 'Chính sách bảo mật hạn chế các giá trị có thể có của phần tử &lt;base&gt;.';
$lang_module['csp_act'] = 'Kích hoạt CSP';

$lang_module['rp'] = 'Thiết lập RP';
$lang_module['rp_desc'] = 'Referrer-Policy (RP) là tên của tiêu đề HTTP (HTTP response header) mà các trình duyệt hiện đại sử dụng để kiểm soát lượng thông tin liên kết nguồn (được gửi qua header &quot;Referer&quot; đến trang đích).';
$lang_module['rp_desc2'] = 'Các thông tin liên kết nguồn có thể được gửi:<ul><li>Origin: bao gồm scheme (ví dụ: http, https), host (ví dụ: nukeviet.vn) và port (ví dụ: 80, 443)</li><li>Path (đường dẫn tuyệt đối trên máy phục vụ, ví dụ: thumuc1/index.php)</li><li>Querystring (chuỗi truy vấn, ví dụ: ?name=ferret&color=purple)</li></ul>';
$lang_module['rp_details'] = 'Thông tin chi tiết';
$lang_module['rp_act'] = 'Kích hoạt RP';
$lang_module['rp_no_referrer'] = 'Header &quot;Referer&quot; sẽ bị bỏ qua hoàn toàn. Không có thông tin về liên kết nguồn được gửi cùng với các yêu cầu.<br/>Chú ý: NukeViet không hỗ trợ chỉ thị này!';
$lang_module['rp_no_referrer_when_downgrade'] = 'Gửi origin, path và querystring của liên kết nguồn trong header &quot;Referer&quot; khi giao thức của trang đích giống hoặc bảo mật hơn trang nguồn (HTTP→HTTP, HTTP→HTTPS, HTTPS→HTTPS). Không gửi header &quot;Referer&quot; cho các yêu cầu đến các trang đích kém an toàn hơn (HTTPS→HTTP, HTTPS→file).';
$lang_module['rp_origin'] = 'Chỉ gửi origin của liên kết nguồn trong header &quot;Referer&quot;. Ví dụ: với liên kết nguồn là https://example.com/page.html sẽ gửi header &quot;Referer&quot; là https://example.com/.';
$lang_module['rp_origin_when_cross_origin'] = 'Gửi origin, path và querystring khi trang đích có cùng origin. Chỉ gửi origin đối với các trường hợp khác.';
$lang_module['rp_same_origin'] = 'Gửi origin, path và querystring khi trang đích có cùng origin. Không gửi header &quot;Referer&quot; đối với các trường hợp khác.';
$lang_module['rp_strict_origin'] = 'Chỉ gửi origin khi giao thức của trang đích giống trang nguồn (HTTPS→HTTPS). Không gửi header &quot;Referer&quot; đến các đích kém an toàn hơn (HTTPS→HTTP).';
$lang_module['rp_strict_origin_when_cross_origin'] = 'Gửi origin, path và querystring khi trang đích có cùng origin. Chỉ gửi origin khi trang đích không cùng origin nhưng cùng giao thức (HTTPS→HTTPS). Không gửi header &quot;Referer&quot; đến các đích không cùng origin và giao thức kém an toàn hơn (HTTPS→HTTP). Đây là chính sách mặc định nếu không có chính sách nào được chỉ định hoặc nếu giá trị đã cung cấp không hợp lệ.';
$lang_module['rp_unsafe_url'] = 'Gửi origin, path và querystring trong mọi trường hợp. Cảnh báo: Chính sách này sẽ làm rò rỉ thông tin có khả năng riêng tư từ các URL dạng HTTPS đến các nguồn không an toàn. Hãy xem xét cẩn thận tác động của cài đặt này.';
$lang_module['rp_note'] = 'Để đề phòng trường hợp trình duyệt không hỗ trợ chỉ thị mong muốn, bạn có thể liệt kê nhiều chỉ thị được phân cách bằng dấu phẩy với trật tự: chỉ thị mong muốn được chỉ định sau cùng. Ví dụ: Referrer-Policy: no-referrer-when-downgrade, strict-origin-when-cross-origin. Ở ví dụ trên, chính sách no-referrer-when-downgrade sẽ được áp dụng nếu trình duyệt không hỗ trợ strict-origin-when-cross-origin.';
$lang_module['rp_directives'] = 'Các chỉ thị RP';
$lang_module['XSSsanitize'] = 'Lọc các mã HTML nguy hiểm trước khi gửi biểu mẫu';
$lang_module['admin_XSSsanitize'] = 'Trong khu vực quản trị';
$lang_module['user_XSSsanitize'] = 'Trong khu vực tương tác của người dùng';
