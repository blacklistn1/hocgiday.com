<?php
/**
 * Created by PhpStorm.
 * User: VuongPhoenixBep
 * Date: 25/11/2017
 * Time: 4:37 CH
 */

class Qrcode extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->model('m_qrcode');
    }

    public function index($code = '')
    {
        if (empty($code)) {
            redirect('/');
        } else {
            $code = trim(strip_tags(htmlspecialchars($code)));
            $result = $this->m_qrcode->read_row('ten', array('ma' => $code));
            if ($result != NULL) {
                $this->email->from('no-reply@customer.com');
                $this->email->to('cskh@hocgiday.vn');

                $mess = "Đã xác nhận quét mã Qrcode của ".$result->ten;
                $this->email->subject($mess);
                $this->email->message($mess);
                $this->email->set_alt_message($mess);

                if ($this->email->send()) {
                    $this->load->view('client/end_action/qrcode_success');
                } else {
                    $data['error'] = $this->email->print_debugger();
                    $this->load->view('client/end_action/sendmailerror',$data);
                }
            } else {
                $this->load->view('client/end_action/qrcode_error');
            }
        }
    }
}
