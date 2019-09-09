<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contest;

class AjaxController extends Controller
{
    //
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
            
            echo"<div class='col-lg-12'> <b><u>Nội dung:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='NoiDung' rows='5' readonly>".$ct->Noidung."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Quy định:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Quydinh' rows='5' readonly>".$ct->Quydinh."</textarea>";

            echo"<div class='col-lg-12'> <b><u>Quy cách:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Quycach' rows='5' readonly>".$ct->Quycach."</textarea>";
            
            echo"<div class='col-lg-12'> <b><u>Phương thức:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Phuongthuc' rows='5' readonly>".$ct->Phuongthuc."</textarea>";
            
            echo"<div class='col-lg-12'> <b><u>Đối tượng:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Doituong' rows='5' readonly>".$ct->Doituong."</textarea>";
            
            echo"<div class='col-lg-12'> <b><u>Giải thưởng:</u></b> </div>
                <textarea class='col-lg-12 form-control' name='Giaithuong' rows='5' readonly>".$ct->Giaithuong."</textarea>";
        
        }
    }
}
?>
