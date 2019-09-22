<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;
use App\TheLoai;

class AjaxController extends Controller
{
    // Ajax cho Cuộc thi
    public function getContest($id)
    {
        $contest = Contest::where('id',$id)->get();

        foreach($contest as $ct)
        {
            

            $Date_begin = date('d/m/Y', strtotime($ct->Date_begin));
            $Date_end = date('d/m/Y', strtotime($ct->Date_end));
            $Date_result = date('d/m/Y', strtotime($ct->Date_result));
            if($ct->Active == 1){
                $Active = 'Đang hoạt động';
            }else{
                $Active = 'Không hoạt động';
            }
            echo "<div class='col-lg-3'> <p><b><u>Trạng thái: </u></b></p>".$Active."</div>";
            echo "<div class='col-lg-3'> <p><b><u>Ngày bắt đầu: </u></b></p>".$Date_begin."</div>";
            echo "<div class='col-lg-3'> <p><b><u>Ngày kết thúc: </u></b></p>".$Date_end."</div>";
            echo "<div class='col-lg-3'> <p><b><u>Ngày kết quả: </u></b></p>".$Date_result."</div>";
            
            // echo "<i class='fa fa-pencil fa-fw'></i><a href='admin/contest/sua/".$ct->id."'>Sửa</a>";
            // echo "<i class='fa fa-trash-o  fa-fw'></i><a href='admin/contest/xoa/".$ct->id."'>Xóa</a>";

            echo "<div class='col-lg-3' style='padding-top:20px; padding-bottom:20px'> <a class='btn btn-danger' href='admin/contest/xoa/".$ct->id."'><i class='fa fa-trash-o  fa-fw'></i> Xóa</a></div>";
            echo "<div class='col-lg-3' style='padding-top:20px; padding-bottom:20px'> <a class='btn btn-primary' href='admin/contest/sua/".$ct->id."'><i class='fa fa-pencil fa-fw'></i> Sửa</a></div>";
           
            // echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-Delete'><i class='fa fa-trash-o fa-fw'></i>Xóa</button>";

            echo"<div class='col-lg-12'> <b><u>Thể lệ:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='TheLe' rows='5' readonly>".$ct->Thele."</textarea>";
            
            echo"<div class='col-lg-12'> <b><u>Ban tổ chức:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='BanToChuc' rows='5' readonly>".$ct->Bantochuc."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Ban giám khảo:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Bangiamkhao' rows='5' readonly>".$ct->Bangiamkhao."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Phương thức:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Phuongthuc' rows='5' readonly>".$ct->Phuongthuc."</textarea>";
            
            echo"<div class='col-lg-12'> <b><u>Giải thưởng:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Giaithuong' rows='5' readonly>".$ct->Giaithuong."</textarea>";
        
        }
    }

    public function getTheLoai($id)
    {
        $theloai = TheLoai::where('id',$id)->get();

        foreach($theloai as $tl)
        {
            echo "<div class='col-lg-3' style='padding-top:20px; padding-bottom:20px'> <a class='btn btn-danger' href='admin/theloai/xoa/".$tl->id."'><i class='fa fa-trash-o  fa-fw'></i> Xóa</a></div>";
            echo "<div class='col-lg-3' style='padding-top:20px; padding-bottom:20px'> <a class='btn btn-primary' href='admin/theloai/sua/".$tl->id."'><i class='fa fa-pencil fa-fw'></i> Sửa</a></div>";
            
            // echo "<button type='button' class='btn btn-danger' data-toggle='modal' data-target='#modal-Delete'><i class='fa fa-trash-o fa-fw'></i>Xóa</button>";
            
            echo "<div class='col-lg-8'> <b><u>Tên chủ đề:</u></b> </div>
                <input type='text' class='col-lg-8' name='txt_Ten_ChuDe' value='".$tl->Ten_chude."' readonly />";

            echo "<div class='col-lg-12'> <b><u>File Thể lệ chi tiết (*.pdf):</u></b> </div>
                <input type='text' class='col-lg-6' name='TheLe_pdf' value='".$tl->Thele_pdf."' readonly />";

            echo "<div class='col-lg-8'> <b><u>Trong Cuộc thi:</u></b> </div>
                <input type='text' class='col-lg-8' name='id_contest' value='".$tl->contest->Ten."' readonly />";
            
            echo"<div class='col-lg-12'> <b><u>Mục đích:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='MucDich' rows='5' readonly>".$tl->Mucdich."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Đối tượng:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='DoiTuong' rows='5' readonly>".$tl->Doituong."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Nội dung:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='NoiDung' rows='5' readonly>".$tl->Noidung."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Thể lệ:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='TheLe' rows='5' readonly>".$tl->Thele."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Thể lệ tóm tắt:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='TheLe_tomtat' rows='5' readonly>".$tl->Thele_tomtat."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Quy định:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='QuyDinh' rows='5' readonly>".$tl->Quydinh."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Tiêu chí:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='TieuChi' rows='5' readonly>".$tl->Tieuchi."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Giải thưởng:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='GiaiThuong' rows='5' readonly>".$tl->Giaithuong."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Giải thưởng tóm tắt:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='GiaiThuong_tomtat' rows='5' readonly>".$tl->Giaithuong_tomtat."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Quy cách:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='QuyCach' rows='5' readonly>".$tl->Quycach."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Phương thức:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='PhuongThuc' rows='5' readonly>".$tl->Phuongthuc."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Ban tổ chức:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='BanToChuc' rows='5' readonly>".$tl->Bantochuc."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Ban giám khảo:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='BanGiamKhao' rows='5' readonly>".$tl->Bangiamkhao."</textarea>";

        
        }
    }

    // Ajax từng chủ đề
    public function getTheLe($id)
    {
        $theloai = TheLoai::where('id',$id)->get();

        $contest = Contest::where('Active',1)->get();
        foreach ($contest as $ct)
        {
            $Date_begin = date('d/m/Y', strtotime($ct->Date_begin));
            $Date_end = date('d/m/Y', strtotime($ct->Date_end));
            $Date_result = date('d/m/Y', strtotime($ct->Date_result));
            $Date_view = date('d-m-Y', strtotime($ct->Date_end));
            
            $date=date_create($ct->Date_end);
            date_add($date,date_interval_create_from_date_string('2 days'));
            $Date_recive = date_format($date,'d/m/Y');
            
            $date=date_create($ct->Date_result);
            date_add($date,date_interval_create_from_date_string('7 days'));
            $Date_award = date_format($date,'d/m/Y');
        }

    foreach($theloai as $tl) 
    {
        echo"
            <div class='col-lg-8'>
                <!-- Title -->
                    <h3><span><img src='images/info.png'></span><b>THỂ LỆ: Chủ đề ".$tl->Ten_chude."</b></h3>
                    
                
                <p>
                    <b>I. MỤC ĐÍCH:  <br></b>              
                        ".@($tl->Mucdich)."
                </p>
                <p>
                    <b>II. ĐỐI TƯỢNG DỰ THI:  <br></b>              
                        ".@($tl->Doituong)."
                </p>
                <p>
                    <b>III. NỘI DUNG:  <br></b>              
                        ".@($tl->Noidung)."
                </p>
                <p>
                    <b>IV. THỂ LỆ DỰ THI:  <br></b>              
                        ".@($tl->Thele)."
                </p>
                <p>
                    <b>V. QUY ĐỊNH CHUNG:  <br></b>              
                        ".@($tl->Quydinh)."
                </p>
                <p>
                    <b>VI. TIÊU CHÍ ĐÁNH GIÁ:  <br></b>              
                        ".@($tl->Tieuchi)."
                </p>
                <p>
                    <b>VII. CƠ CẤU GIẢI THƯỞNG:  <br></b>              
                        ".@($tl->Giaithuong)."
                </p>
                <p>
                    <b>VIII. HÌNH THỨC VÀ QUY CÁCH:  <br></b>              
                        ".@($tl->Quycach)."
                </p>
                <p>
                    <b>IX. PHƯƠNG THỨC NỘP SẢN PHẨM:  <br></b>              
                        ".@($tl->Phuongthuc)."
                </p>
                <p>
                    <b>X. THỜI HẠN DỰ THI:</b><br>
                    
                    - Nhận tác phẩm: ".$Date_begin." - ".$Date_end." <br>
					- Chấm tác phẩm: ".$Date_recive." - ".$Date_result." <br>
					- Thông báo kết quả: ".$Date_result." <br>
					- Trao giải thưởng: ".$Date_award." (sau 07 ngày)
                </p>
                <p>
                    <b>XI. BAN TỔ CHỨC </b><br>
                    ".@($ct->Bantochuc)."
                </p>
                <p>
                    <b>XII. BAN GIÁM KHẢO </b><br>
                    ".@($ct->Bangiamkhao)."
                </p>
                <p>
                    <b>THÔNG TIN LIÊN HỆ BAN TỔ CHỨC </b><br>
                    Thầy Dũng, mobile phone: 0903 100 550 - Email: hungdung@ctu.edu.vn
                </p>
                
            </div>
            ";
    }

    }
}
?>
