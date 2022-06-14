<?php
require_once APP_ROOT . '/src/models/ModelHelper.php';
class ServiceModel
{

    // public $servicesId;
    // public $servicesName;
    // public $servicesDesc;
    // public $servicesPrice;
    // public $servicesImg;

    public $servicesList;

    function __construct()
    {
        // A list of productsDetail given by the database
        $servicesList = [];

        // == TEST PURPOSE ==
        $idList = [
            "plan-1",
            "plan-2",
            "plan-3"
        ];

        $nameList = [
            "Dịch vụ tư vấn trực tiếp tại trung tâm",
            "Dịch vụ tư vấn trực tuyến",
            "Dịch vụ tư vấn tại gia"
        ];

        $descList = [
            "60% khách hàng là bệnh nhân của chúng tôi đã quyết định đến trung tâm để tham gia vào các khóa điều trị cộng đồng. Kết quả mang lại là rất rõ rệt và được đánh giá rất cao trong số các khách hàng. Nếu bạn cảm thấy không phiền, hãy đến với trung tâm của chúng tôi để nhận được nhiều ưu đãi hơn.",
            "Trong mùa dịch bệnh đang hoành hành, nhiều khách hàng cảm thấy rất e ngại với việc tiếp xúc gần cũng như phải ra ngoài. Thấu hiểu được điều đó, mô hình chăm sóc và tư vấn sức khỏe tâm lý của khách hàng trực tuyến đã được chúng tôi triển khai và tiến hành từ rất sớm. Các bạn sẽ được cung cấp một hệ thống để liên lạc với các bác sĩ 24/7.",
            "&quot;Hikikomori&quot; là một thuật ngữ được dùng để chỉ những người không muốn tiếp xúc với xã hội bên ngoài. Đây là một trong những tình trạng đáng báo động trong xã hội Nhật Bản những năm trở lại đây. Vì thế, chúng tôi đã dành ra một đội ngũ đặc biệt để đến tận nhà và hỗ trợ điều trị các chứng bệnh về tâm lý xã hội cho bệnh nhân."
        ];

        $priceList = [
            "1.000.000VNĐ / 8 tuần điều trị",
            "2.000.000VNĐ / 16 tuần điều trị",
            "2.500.000VNĐ / 10 tuần điều trị tại gia + 6 tuần điều trị tại trung tâm"
        ];

        $imgList = [
            "https://bookingcare.vn/files/blog/2020/12/30/100527-tu-van-tam-ly.jpg",
            "https://cdn.bookingcare.vn/fr/w800/2020/12/21/165610-tu-van-tam-ly-online.jpg",
            "https://cdn.bookingcare.vn/fr/w800/2020/12/23/172913-chuyen-gia-tam-ly.jpg"
        ];

        for ($i = 0; $i < 3; $i++)
            $servicesList[$i] = new servicesDetail($idList[$i], $nameList[$i], $descList[$i], $priceList[$i], $imgList[$i]);

        $this->servicesList = $servicesList;
    }

    // public function __construct($id, $name, $desc, $price, $img)
    // {
    //     $this->servicesId = $id;
    //     $this->servicesName = $name;
    //     $this->servicesDesc = $desc;
    //     $this->servicesPrice = $price;
    //     $this->servicesImg = $img;
    // }

    function getAll()
    {
        return $this->servicesList;
    }

    function find($id)
    {
    }

    function remove($id)
    {
    }

    function add($service)
    {
    }

    function modify($id, $service)
    {
    }
}
