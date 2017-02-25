@extends('layouts.masterDetailIndex')
@section('main')
    <div id="bill_info">            
      <form  method="get" action="{!! route('save.order') !!}">
            <input name="_token" type="hidden" id="token" value="{!! csrf_token() !!}">
            <div align="center">
                <h1 align="center">Thông tin thanh toán</h1>
                <table border="0" cellpadding="2px" class="table">
                    <tbody>
                        <tr>
                            <td align="right">Tổng tiền:</td><td><strong style="color: black; padding-left: 10px;"> {!!  $total !!} vnđ</strong></td>
                        </tr>
                        <tr>
                            <td align="right">Họ và Tên:</td><td><input type="text" name="name" required="" class="form-control"/></td>
                        </tr>
                        <tr>
                            <td align="right">Email:</td><td><input type="text" name="email" class="form-control" required=""/></td>
                        </tr>
                        <tr>
                            <td align="right">Điện thoại:</td><td><input type="text" name="phone" class="form-control" required=""/></td>
                        </tr>
                        <tr>
                            <td align="right">Địa chỉ:</td><td><textarea name="address" cols="35" rows="5" class="form-control"  required=""></textarea></td>
                        </tr>
                        <tr>
                            <td><a class="fg-button teal" id="back" href="{!! URL::route('index') !!}">Mua tiếp</a></td>
                            <td><button class="fg-button teal" type="submit">Gửi thông tin</button></td>
                        </tr> 
                    </tbody>
                </table>
            </div>
        </form>
    </div>   
@endsection     