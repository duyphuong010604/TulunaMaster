<?php
class adminValidation
{
    var $username = null;
    var $password = null;
    var $dongy = null;
    var $fullname = null;
    var $email = null;
    var $phone = null;
    var $status = null;
    var $address = null;
    var $date = null;
    var $name = null;
    var $origin = null;
    var $category = null;
    var $brand = null;
    var $price = null;
    var $priceSale = null;
    var $size = null;
    var $description = null;
    var $dateUpdate = null;
    var $note = null;
    var $title = null;
    var $discountvar = null;
    var $conditionDiscountvar = null;
    var $promotionTypevar = null;
    var $starTimevar = null;
    var $endTime = null;
    var $fk_categoryId  = null;
    var $fk_brandId = null;
    var $content = null;
    var $errors = array();


    public function validation_dangnhap($username, $password, $dongy)
    {
        $errors = array();
        if (empty($username)) {
            $errors['username'] = "Vui lòng điền tên đăng nhập vào ô!";
        }
        if (empty($password)) {
            $errors['password'] = "Vui lòng nhập mật khẩu!";
        }
        if (empty($dongy)) {
            $errors['dongy'] = "Vui lòng nhấn chọn vào ô trống!";
        }
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

    public function validation_quenmatkhau($username,$email){
        $errors = array();
        if (empty($username) || strlen($username) < 3) {
            $errors['username'] = "Vui lòng điền tên đăng nhập vào ô!";
        }
        if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Vui lòng điền email hợp lệ!";
        }
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

    public function validation_dongy($dongy){
        $errors = array();
        
        if (empty($dongy) ) {
            $errors['dongy'] = "Vui lòng tích vào ô đồng ý!";
        }
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }


    public function validation_taikhoan_kh($username, $password, $fullname, $address, $email, $phone,  $status)
    {
        $errors = array();
        if (empty($username) || strlen($username) < 3) {
            $errors['username'] = "Vui lòng điền tên đăng nhập vào ô!";
        }
        if (empty($password) || strlen($password) <= 5 || strlen($password) >= 16) {
            $errors['password'] = "Vui lòng nhập mật khẩu từ 5-16 kí tự!";
        }
        if (empty($fullname) || strlen($fullname) < 5 || is_numeric($fullname)) {
            $errors['fullname'] = "Vui lòng điền họ và tên đầy đủ!";
        }
        if (empty($address) || strlen($address) < 5) {
            $errors['address'] = "Vui lòng điền thông tin địa chỉ!";
        }
        $pattern_email = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
        if (empty($email) || !preg_match($pattern_email, $email)) {
            $errors['email'] = "Vui lòng nhập đúng định dạng email!";
        }
        if (empty($phone) || strlen($phone) < 9 || !is_numeric($phone) || strlen($phone)>10) {
            $errors['phone'] = "Vui lòng nhập đúng định dạng của thuê bao!";
        }
       
        if (empty($status)) {
            $errors['status'] = "Vui lòng chọn trạng thái!";
        }

        if (empty($errors)) {
            $errors =1;
        }
        return $errors;

    }

    public function validation_towElement($name, $status)
    {
        $errors = array();
        if (empty($name) || strlen($name) < 3) {
            $errors['name'] = "Vui lòng điền tên vào ô!";
        }
        if (empty($status)) {
            $errors['status'] = "Vui lòng chọn trạng thái!";
        }
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

    public function validation_brands($name, $status, $origin)
    {
        $errors = array();
        if (empty($name) || strlen($name) < 3) {
            $errors['name'] = "Vui lòng điền tên thương hiệu vào ô!";
        }
        if (empty($status)) {
            $errors['status'] = "Vui lòng chọn trạng thái!";
        }

        if (empty($origin)) {
            $errors['origin'] = "Vui lòng điền thông tin xuất xứ!";
        }
        if (empty($errors)) {
            $errors =1;
        }
        return $errors;
    }

    public function validation_product($name, $price, $size, $description, $dateUpdate, $status, $fk_categoryId,
    $fk_brandId)
    {
        $errors = array();
        if (empty($name)) {
            $errors['name'] = "Vui lòng điền tên sản phẩm!";
        }
        if (empty($price)) {
            $errors['price'] = "Vui lòng cho giá sản phẩm!";
        }
        // if ($price < $priceSale) {
        //     $errors['priceSale'] = "Vui lòng không để giá sale thấp hơn giá sản phẩm!";
        // }
        if ($price < 1000) {
            $errors['price'] = "Vui lòng không để giá sản phẩm lớn hơn 1000 VNĐ!";
        }
        if (empty($size)) {
            $errors['size'] = "Vui lòng nhấp kích thước cho sản phẩm!";
        }
        if (empty($description)) {
            $errors['description'] = "Vui lòng nhập thêm mô tả!";
        }
        if (empty($dateUpdate)) {
            $errors['dateUpdate'] = "Vui lòng điền thêm ngày nhập!";
        }
        if (empty($status)) {
            $errors['status'] = "Vui lòng chọn trạng thái!";
        }
        if(empty($fk_categoryId)){
            $errors['fk_categoryId'] = "Vui lòng chọn loại sản phẩm!";
        }
        if(empty($fk_brandId)){
            $errors['fk_brandId'] = "Vui lòng chọn thương hiệu!";
        }
        if (empty($errors)) {
            $errors = 1;
        }
        return $errors;
    }

    public function validation_banner($title, $status, $content)
    {
        $errors = array();
        if (empty($title) || strlen($title) < 3) {
            $errors['title'] = "Vui lòng điền tiêu đề cho banner!";
        }
        if (empty($status)) {
            $errors['status'] = "Vui lòng chọn trạng thái!";
        }
        if (empty($content) || strlen($content) < 5) {
            $errors['content'] = "Vui lòng điền thêm nội dung!!";
        }
        if (empty($errors)) {
            $errors = 1;
        }
        return $errors;
    }

    public function validation_maKhuyenMai($name, $discount, $conditionDiscount, $promotionType, $starTime, $endTime, $status)
    {
        $errors = array();
        if (empty($name) || strlen($name) < 3) {
            $errors['name'] = "Vui lòng điền tên mã khuyến mãi vào ô!";
        }
        if (empty($discount)) {
            $errors['discount'] = "Vui lòng điền giá khuyến mãi vào ô!";
        }
        if(!is_numeric($discount) || $discount < 2999){
            $errors['discount'] = "Vui lòng điền số lớn hơn 3000 VNĐ!";
        }
        if (empty($conditionDiscount)) {
            $errors['conditionDiscount'] = "Vui lòng điền giá điều kiện mã khuyến mãi vào ô!";
        }
        if(!is_numeric($conditionDiscount) || $conditionDiscount < 999){
            $errors['conditionDiscount'] = "Vui lòng điền giá điều kiện là số và lớn hơn 1000 VNĐ!";
        }
        if (empty($promotionType)) {
            $errors['promotionType'] = "Vui lòng chọn kiễu mã khuyến mãi!";
        }
        if (empty($starTime)) {
            $errors['starTime'] = "Vui lòng chọn ngày bất đầu!";
        }
        if (empty($endTime)) {
            $errors['endTime'] = "Vui lòng chọn ngày kết thúc!";
        }

        if (empty($status)) {
            $errors['status'] = "Vui lòng chọn trạng thái!";
        }

        if($endTime < $starTime) {
            $errors['endTime'] = "Vui lòng chọn ngày kết thúc sau ngày bất đầu!";
        }
        
        if (empty($errors)) {
            $errors = 1;
        }
        return $errors;
    }
}