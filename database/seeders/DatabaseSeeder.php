<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            // category::class,
            // book::class,
            // author::class,
            book::class,
        ]);
    }
}
// class category extends Seeder {
//     public function run(){
//         DB::table('category')->insert([
//             [ 'name'    => 'Sách tiểu thuyết'],
//             [ 'name'    => 'Sách kinh tế'],
//             [ 'name'    => 'Sách Kỹ năng sống'],
//             [ 'name'    => 'Sách nuôi dạy con'],
//             [ 'name'    => 'Sách ngoại ngữ'],
//             [ 'name'    => 'Sách nấu ăn'],
//         ]);
//     }
// }
// class book extends Seeder {
//     public function run(){
//         DB::table('book')->insert([
//             [ 'name'    => 'Sách tiểu thuyết'],
//             [ 'name'    => 'Sách kinh tế'],
//             [ 'name'    => 'Sách Kỹ năng sống'],
//             [ 'name'    => 'Sách nuôi dạy con'],
//             [ 'name'    => 'Sách ngoại ngữ'],
//             [ 'name'    => 'Sách nấu ăn'],
//         ]);
//     }
// }
// class author extends Seeder {
//     public function run(){
//         DB::table('author')->insert([
//             [ 'name'    => 'Nguyễn Nhật Ánh'],
//             [ 'name'    => 'Trạch Quế Vinh'],
//             [ 'name'    => 'BS Bùi Trí Đoàn'],
//             [ 'name'    => 'Trần Hân Thanh Nhã'],
//             [ 'name'    => 'Lý Bình'],
//             [ 'name'    => 'Cẩm Tuyết'],
//             [ 'name'    => 'An Bình'],
//             [ 'name'    => 'Hùng Vân Linh'],
//             [ 'name'    => 'Thu Tâm'],
//             [ 'name'    => 'Minh Huyền'],
//             [ 'name'    => 'Quỳnh Chi'],
//             [ 'name'    => 'Diệu Thảo'],
//         ]);
//     }
// }
// class book extends Seeder {
//     public function run(){
//         DB::table('book1')->insert([
            // //1
            // ['id' => 1 , 'name'    => 'Con Chim Xanh Biếc Bay Về' , 'brand' => 'd', 'price' => 180000 , 'smallDes' => 'Văn chương dành cho tuổi mới lớn.', 'image' => '1.jpg', 'intro'=> 'Với tác phẩm mới, Nguyễn Nhật Ánh tiếp tục chinh phục bạn đọc bằng câu chuyện cổ tích. Dù cổ điển hay hiện đại, tình yêu trong truyện của Nguyễn Nhật Ánh vẫn sẽ chiến thắng.',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian. Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Đã từ lâu, Nguyễn Nhật Ánh xác lập cho mình một vị trí không thể thay thế ở dòng văn chương dành cho tuổi mới lớn.
            // Những cảm xúc trong trẻo, hồn hậu gắn liền những ký ức tuổi thơ ở một vùng quê nghèo miền Trung hay những cảm xúc mưa nắng thất thường của tuổi mới lớn đều được ông nắm bắt tâm lý tài tình và viết ra với một văn phong giản dị mà thấu hiểu.
            // ', 'cat_id' =>1 , 'author_id' => 1, 'status' => true ],
            // //2
            // ['id' => 2 , 'name'    => 'Nhà Giả Kim' , 'brand' => 'd', 'price' => 155000 , 'smallDes' => 'Chiến thắng bản thân',
            // 'image' => '2.jpg', 'intro'=> 'Nhà giả kim là một trong những tác phẩm hay nhất của nhà văn Paulo Coelho, được mệnh danh là cuốn sách bán chạy chỉ sau kinh thánh. Tuy nhiên, với những người đam mê sách khó tính, cuốn sách này dù kiệt xuất đến đâu cũng không tránh khỏi nhiều sự chỉ trích trái chiều. Dễ hiểu hơn thì cứ 10 độc giả khen hay thì ắt có tới 9 người chê dở.',  
            // 'review' => 'Thực hư về chuyện xuất bản nhiều như những cuốn sách kinh thánh rất có thể chỉ là một chiêu trò của các nhà Marketing. Tuy nhiên không thể phủ nhận rằng, Nhà giả kim (tiếng anh là The Alchemist) là một cuốn sách đã vượt tầm thời đại và có sức cuốn hút rất riêng mà hiếm tác phẩm đương thời nào sánh được. Bởi vậy nên không ngạc nhiên khi tác phẩm này đã trở thành một trong những cuốn sách “best-seller” liên tục trong nhiều năm tại các trang bán sách online.',
            // 'cat_id' =>1 , 'author_id' => 2, 'status' => true ],
            // //3
            // ['id' => 3 , 'name'    => 'Quân Khu Nam Đồng' , 'brand' => 'd', 'price' => 110000 , 'smallDes' => 'Hà Nội thời chống Mỹ',
            // 'image' => '3.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Thực hư về chuyện xuất bản nhiều như những cuốn sách kinh thánh rất có thể chỉ là một chiêu trò của các nhà Marketing. Tuy nhiên không thể phủ nhận rằng, Nhà giả kim (tiếng anh là The Alchemist) là một cuốn sách đã vượt tầm thời đại và có sức cuốn hút rất riêng mà hiếm tác phẩm đương thời nào sánh được. Bởi vậy nên không ngạc nhiên khi tác phẩm này đã trở thành một trong những cuốn sách “best-seller” liên tục trong nhiều năm tại các trang bán sách online.',
            // 'cat_id' =>1 , 'author_id' => 3, 'status' => true ],
            // //4
            // ['id' => 4 , 'name'    => 'Dấu Chân Trên Cát ' , 'brand' => 'd', 'price' => 90000 , 'smallDes' => 'Văn minh Ai Cập cổ đại',
            // 'image' => '4.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Cái số một đó là khái niệm khoa học của sự chết, các bạn đều biết đến khoa học của sự sống hiểu đơn giản là học nghiên cứu về cơ thể và cứu người để làm sao cho con người sống tốt hơn, sống khỏe mạnh hơn, tuy nhiên khoa học về sự chết lại là khái niệm vô cùng lạ lẫm cuốn hút. Ai cũng chết đi, vậy khi chết đi rõ ràng là chúng ta phải có sự chuẩn bị, chuyển qua một giai đoạn mới đó là “bên kia” nếu chúng ta không chuẩn bị gì hết thì chúng ta cũng sẽ bị te tua ở bên kia. Chính vì vậy khoa học của sự chết là cách chúng ta chuẩn bị khi mà chúng ta chết đi.',
            // 'cat_id' =>1 , 'author_id' => 1, 'status' => true ],
            // //5
            // ['id' => 5 , 'name'    => 'Những Giấc Mơ Ở Hiệu Sách Morisaki ' , 'brand' => 'd', 'price' => 55000 , 'smallDes' => 'Sách dành cho người trẻ',
            // 'image' => '5.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Takako bị phụ tình, người cô hẹn hò một năm nay đột ngột tuyên bố kết hôn. Cô đã bỏ việc, đã chán nản đến phờ phạc, để rồi một ngày đột nhiên nhận được cuộc gọi của người cậu ruột 10 năm trời chưa gặp mặt. Cô đến hiệu sách cũ Morisaki ở phố sách Jimbocho, mà không ngờ rằng những tháng ngày ở góc bình yên hiếm hoi giữa thủ đô này sẽ thay cho tâm hồn cô một diện mạo mới.
            // Có gì quyến rũ ở một tiệm sách cũ? Một người cậu “ẻo lả như động vật thân mềm” với cuộc hôn nhân dang dở? Một căn phòng gác hẹp rí chất đầy sách cũ phải dọn dẹp cả buổi mới đủ chỗ ngủ? Những buổi sáng thẫn thờ trông tiệm, lờ đờ tiếp đón dăm ba vị khách?',
            // 'cat_id' =>1 , 'author_id' => 2, 'status' => true ],
            // //6
            // ['id' => 6 , 'name'    => 'Dấu Chân Trên Cát ' , 'brand' => 'd', 'price' => 75000 , 'smallDes' => 'Sách dành cho bạn',
            // 'image' => '6.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Cái số một đó là khái niệm khoa học của sự chết, các bạn đều biết đến khoa học của sự sống hiểu đơn giản là học nghiên cứu về cơ thể và cứu người để làm sao cho con người sống tốt hơn, sống khỏe mạnh hơn, tuy nhiên khoa học về sự chết lại là khái niệm vô cùng lạ lẫm cuốn hút. Ai cũng chết đi, vậy khi chết đi rõ ràng là chúng ta phải có sự chuẩn bị, chuyển qua một giai đoạn mới đó là “bên kia” nếu chúng ta không chuẩn bị gì hết thì chúng ta cũng sẽ bị te tua ở bên kia. Chính vì vậy khoa học của sự chết là cách chúng ta chuẩn bị khi mà chúng ta chết đi.',
            // 'cat_id' =>1 , 'author_id' => 1, 'status' => true ],

            // //7
            // ['id' => 7 , 'name'    => 'Chuộc Tội' , 'brand' => 'd', 'price' => 45000 , 'smallDes' => 'Cuốn sách đáng đọc nhất',
            // 'image' => '7.jpg', 'intro'=> '“Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Cái số một đó là khái niệm khoa học của sự chết, các bạn đều biết đến khoa học của sự sống hiểu đơn giản là học nghiên cứu về cơ thể và cứu người để làm sao cho con người sống tốt hơn, sống khỏe mạnh hơn, tuy nhiên khoa học về sự chết lại là khái niệm vô cùng lạ lẫm cuốn hút. Ai cũng chết đi, vậy khi chết đi rõ ràng là chúng ta phải có sự chuẩn bị, chuyển qua một giai đoạn mới đó là “bên kia” nếu chúng ta không chuẩn bị gì hết thì chúng ta cũng sẽ bị te tua ở bên kia. Chính vì vậy khoa học của sự chết là cách chúng ta chuẩn bị khi mà chúng ta chết đi.',
            // 'cat_id' =>1 , 'author_id' => 4, 'status' => true ],

            // //8
            // ['id' => 8 , 'name'    => 'Hãy Chăm Sóc Mẹ' , 'brand' => 'd', 'price' => 120000 , 
            // 'smallDes' => 'Tình yêu dành cho mẹ',
            // 'image' => '8.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Cái số một đó là khái niệm khoa học của sự chết, các bạn đều biết đến khoa học của sự sống hiểu đơn giản là học nghiên cứu về cơ thể và cứu người để làm sao cho con người sống tốt hơn, sống khỏe mạnh hơn, tuy nhiên khoa học về sự chết lại là khái niệm vô cùng lạ lẫm cuốn hút. Ai cũng chết đi, vậy khi chết đi rõ ràng là chúng ta phải có sự chuẩn bị, chuyển qua một giai đoạn mới đó là “bên kia” nếu chúng ta không chuẩn bị gì hết thì chúng ta cũng sẽ bị te tua ở bên kia. Chính vì vậy khoa học của sự chết là cách chúng ta chuẩn bị khi mà chúng ta chết đi.',
            // 'cat_id' =>1 , 'author_id' => 3, 'status' => true ],

            // //9
            // ['id' => 9 , 'name'    => 'Hiệu Sách Nhỏ Ở Paris' , 'brand' => 'd', 'price' => 99000 , 
            // 'smallDes' => 'Tình yêu của người trẻ',
            // 'image' => '9.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            // 'review' => 'Cái số một đó là khái niệm khoa học của sự chết, các bạn đều biết đến khoa học của sự sống hiểu đơn giản là học nghiên cứu về cơ thể và cứu người để làm sao cho con người sống tốt hơn, sống khỏe mạnh hơn, tuy nhiên khoa học về sự chết lại là khái niệm vô cùng lạ lẫm cuốn hút. Ai cũng chết đi, vậy khi chết đi rõ ràng là chúng ta phải có sự chuẩn bị, chuyển qua một giai đoạn mới đó là “bên kia” nếu chúng ta không chuẩn bị gì hết thì chúng ta cũng sẽ bị te tua ở bên kia. Chính vì vậy khoa học của sự chết là cách chúng ta chuẩn bị khi mà chúng ta chết đi.',
            // 'cat_id' =>1 , 'author_id' => 2, 'status' => true ],

            //  //10
            //  ['id' => 10 , 'name'    => 'Hiệu Sách Nhỏ Ở Paris' , 'brand' => 'd', 'price' => 79000 , 
            //  'smallDes' => 'Tình yêu dành cho mẹ',
            //  'image' => '10.jpg', 'intro'=> 'Quân khu Nam Đồng” là bài ca về một thế hệ lớn lên trong khu gia binh lớn nhất Hà Nội những năm 1970, ngân vang những nốt thăng trầm về tuổi thơ và tuổi trẻ, về tình bạn và tình yêu, về tiền tuyến và hậu phương, về chiến tranh và những đau thương mất mát…',  
            //  'review' => 'Cái số một đó là khái niệm khoa học của sự chết, các bạn đều biết đến khoa học của sự sống hiểu đơn giản là học nghiên cứu về cơ thể và cứu người để làm sao cho con người sống tốt hơn, sống khỏe mạnh hơn, tuy nhiên khoa học về sự chết lại là khái niệm vô cùng lạ lẫm cuốn hút. Ai cũng chết đi, vậy khi chết đi rõ ràng là chúng ta phải có sự chuẩn bị, chuyển qua một giai đoạn mới đó là “bên kia” nếu chúng ta không chuẩn bị gì hết thì chúng ta cũng sẽ bị te tua ở bên kia. Chính vì vậy khoa học của sự chết là cách chúng ta chuẩn bị khi mà chúng ta chết đi.',
            //  'cat_id' =>1 , 'author_id' => 4, 'status' => true ],
             
            //  //11
            //  ['id' => 11 , 'name'    => 'Từ Tốt Đến Vĩ Đại' , 'brand' => 'd', 'price' => 135000 , 
            //  'smallDes' => 'Suy nghĩ kỷ luật và hành động ',
            //  'image' => '11.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //  'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //  'cat_id' =>2 , 'author_id' => 5, 'status' => true ],

            //  //12
            //  ['id' => 12 , 'name'    => 'Kế Hoạch 12 Tháng Đến Với Tự Do Tài Chính' , 'brand' => 'd', 'price' => 199000 , 
            //  'smallDes' => 'Để cuộc sống tốt hơn',
            //  'image' => '12.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //  'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //  'cat_id' =>2 , 'author_id' => 6, 'status' => true ],
            //   //13
            //   ['id' => 13 , 'name'    => 'Tiếp Thị 4.0 ' , 'brand' => 'd', 'price' => 167000 , 
            //   'smallDes' => 'Cuộc sống thời công nghệ',
            //   'image' => '13.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //   'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //   'cat_id' =>2 , 'author_id' => 8, 'status' => true ],
            //   //14
            //   ['id' => 14 , 'name'    => 'Khởi Nghiệp Kinh Doanh ' , 'brand' => 'd', 'price' => 167000 , 
            //   'smallDes' => 'Động lực quan trọng để phát triển',
            //   'image' => '14.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //   'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //   'cat_id' =>2 , 'author_id' => 5, 'status' => true ],

            //   //15
            //   ['id' => 15 , 'name'    => 'Nghệ Thuật Làm Giàu Của Người Do Thái ' , 'brand' => 'd', 'price' => 117000 , 
            //   'smallDes' => 'Động lực quan trọng để phát triển',
            //   'image' => '15.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //   'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //   'cat_id' =>2 , 'author_id' => 2, 'status' => true ],

              //16
            //   ['id' => 16 , 'name'    => 'Kinh Doanh Kiếm 1 Triệu USD Ở Việt Nam' , 'brand' => 'd', 'price' => 88000 , 
            //   'smallDes' => 'Doanh nhân thế kỉ XX',
            //   'image' => '16.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //   'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //   'cat_id' =>2 , 'author_id' => 10, 'status' => true ],

            //    //17
            //    ['id' => 17 , 'name'    => 'Kiếm Tiền Thời Khủng Hoảng' , 'brand' => 'd', 'price' => 112000 , 
            //    'smallDes' => 'Cách tư duy mới mẻ',
            //    'image' => '17.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //    'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //    'cat_id' =>2 , 'author_id' => 9, 'status' => true ],
            //   //18
            //    ['id' => 18 , 'name'    => '21 Nguyên Tắc Tự Do Tài Chính' , 'brand' => 'd', 'price' =>78000 , 
            //    'smallDes' => 'Để Tự do tài chính',
            //    'image' => '18.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //    'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //    'cat_id' =>2 , 'author_id' => 4, 'status' => true ],

            //    //19
            //    ['id' => 19 , 'name'    => 'Nghĩ Giàu Làm Giàu 365 Ngày' , 'brand' => 'd', 'price' => 155000 , 
            //    'smallDes' => 'Làm giàu không khó',
            //    'image' => '19.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //    'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //    'cat_id' =>2 , 'author_id' => 6, 'status' => true ],

            //    //20
            //    ['id' => 20 , 'name'    => 'Tuần Làm Việc 4 Giờ' , 'brand' => 'd', 'price' => 112000 , 
            //    'smallDes' => 'Thời gian là kim cương',
            //    'image' => '20.jpg', 'intro'=> 'Jim Collins cùng nhóm nghiên cứu đã miệt mài nghiên cứu những công ty có bước nhảy vọt và bền vững để rút ra những kết luận sát sườn, những yếu tố cần kíp để đưa công ty từ tốt đến vĩ đại. Đó là những yếu tố khả năng lãnh đạo, con người, văn hóa, kỷ luật, công nghệ… Những yếu tố này được nhóm nghiên cứu xem xét tỉ mỉ và kiểm chứng cụ thể qua 11 công ty nhảy vọt lên vĩ đại. ',  
            //    'review' => 'Từ tốt đến vĩ đại của Jim Collins là cuốn sách quản trị kinh doanh kinh điển, nằm trong số 20 tác phẩm có ảnh hưởng nhất thế giới về quản trị trong vòng 20 năm qua theo bình chọn của Tạp chí Forbes. Cuốn sách đưa ra một mô hình để chuyển một công ty chỉ ở mức bình thường, hay ở mức tốt, thành một công ty vĩ đại. Bằng cách áp dụng con người kỷ luật, suy nghĩ kỷ luật và hành động kỷ luật một công ty có thể xây dựng và tạo sự đột phá và phá vỡ những rào cản ngăn mình đến sự vĩ đại. Tác giả Jim Collins và các cộng sự của ông đã thực hiện việc nghiên cứu trong nhiều năm liền giữa những công ty vĩ đại và những công ty đối trọng để tìm ra những yếu tố đó. Ông mở đầu cuốn sách bằng câu nói đầy tính thách thức: “Tốt là kẻ thù của Vĩ Đại. Và đó là một trong những lý do chính giải thích vì sao có rất ít điều vĩ đại. ',
            //    'cat_id' =>2 , 'author_id' => 7, 'status' => true ],

            //    //21
            //    ['id' => 21 , 'name'    => 'Đắc Nhân Tâm' , 'brand' => 'd', 'price' => 99000 , 
            //    'smallDes' => 'Sách của thời đại.',
            //    'image' => '21.jpg', 'intro'=> ' Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ, tác phẩm này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện có một không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có tầm ảnh hưởng nhất mọi thời đại.',  
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 1, 'status' => true ],

            //     //22
            //    ['id' => 22 , 'name'    => 'Tuổi Trẻ Đáng Giá Bao Nhiêu' , 'brand' => 'd', 'price' => 154000 , 
            //    'smallDes' => 'Kinh nghiệm của người đi trước',
            //    'image' => '22.jpg', 'intro'=> ' Đắc nhân tâm của Dale Carnegie là quyển sách của mọi thời đại và một hiện tượng đáng kinh ngạc trong ngành xuất bản Hoa Kỳ. Trong suốt nhiều thập kỷ tiếp theo và cho đến tận bây giờ, tác phẩm này vẫn chiếm vị trí số một trong danh mục sách bán chạy nhất và trở thành một sự kiện có một không hai trong lịch sử ngành xuất bản thế giới và được đánh giá là một quyển sách có tầm ảnh hưởng nhất mọi thời đại.',  
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 2, 'status' => true ],

            //    //23
            //    ['id' => 23 , 'name'    => 'Đọc Vị Bất Kỳ Ai' , 'brand' => 'd', 'price' => 154000 , 
            //    'smallDes' => 'Học cách người khác suy nghĩ',
            //    'image' => '23.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 6, 'status' => true ],
            //    //24
            //    ['id' => 24 , 'name'    => 'Khéo Ăn Nói Sẽ Có Được Thiên Hạ' , 'brand' => 'd', 'price' => 123000 , 
            //    'smallDes' => 'Sự im lặng không còn là vàng',
            //    'image' => '24.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 11, 'status' => true ],
            //    //25
            //    ['id' => 25 , 'name'    => '9 Nguyên Tắc Làm Một Người Chồng Tốt' , 'brand' => 'd', 'price' => 83000 , 
            //    'smallDes' => 'Để hôn nhân viên mãn',
            //    'image' => '25.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 5, 'status' => true ],

            //    //26
            //    ['id' => 26, 'name'    => 'Giá Trị Của Sự Tử Tế' , 'brand' => 'd', 'price' => 129000 , 
            //    'smallDes' => 'Sống lâu hơn để tận hưởng',
            //    'image' => '26.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 6, 'status' => true ],

            //    //27
            //    ['id' => 27, 'name'    => 'Hạnh Phúc Do Bạn Lựa Chọn' , 'brand' => 'd', 'price' => 109000 , 
            //    'smallDes' => 'Làm chủ cuộc sống',
            //    'image' => '27.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 3, 'status' => true ],

            //    //28
            //    ['id' => 28, 'name'    => 'Những Giá Trị Sống Cho Tuổi Trẻ' , 'brand' => 'd', 'price' => 119000 , 
            //    'smallDes' => 'Bài học cho người trẻ',
            //    'image' => '28.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 9, 'status' => true ],

            //    //29
            //    ['id' => 29, 'name'    => 'Yêu Mình Trước Đã, Yêu Đời Để Sau' , 'brand' => 'd', 'price' => 109000 , 
            //    'smallDes' => 'Để yêu cuộc sống hơn',
            //    'image' => '29.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 9, 'status' => true ],

            //    //30
            //    ['id' => 30, 'name'    => '- Bạn Đã Sẵn Sàng Để Yêu' , 'brand' => 'd', 'price' => 118000 , 
            //    'smallDes' => 'Vấn đề của tuổi trẻ',
            //    'image' => '30.jpg', 'intro'=> 'Bạn băn khoăn không biết người ngồi đối diện đang nghĩ gì? Họ có đang nói dối bạn không? Đối tác đang ngồi đối diện với bạn trên bàn đàm phán đang nghĩ gì và nói gì tiếp theo?',
            //    'review' => 'Vậy tại sao con người ta cần phải biết cách thu phục ‘nhân tâm’? Và tại sao chúng ta lại phải mua một quyển sách khi không chắc chắn nó thật sự bổ ích? Đó là câu hỏi mà bất cứ một ai  trước khi sẵn sàng mua bất cứ một quyển sách nào đấy đều phải nghĩ và cân nhắc đến. Bởi chắc hẳn không một ai muốn lãng phí thời gian quý báu của mình để làm những điều không mang lại chút lợi ích nào, và câu trả lời là ở đây là? Có! Bởi nó thật sự đáng giá, và quả thật có vô vàng khán giả đã kiểm chứng rằng nó thật sự không làm lãng phí thời gian của bạn chút nào.',
            //    'cat_id' =>3 , 'author_id' => 7, 'status' => true ],

               //31
            //    ['id' => 31, 'name'    => 'Thai Giáo Theo Chuyên Gia' , 'brand' => 'd', 'price' => 118000 , 
            //    'smallDes' => 'Dinh dưỡng khi mang thai.',
            //    'image' => '31.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //    'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //    (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //    'cat_id' =>4 , 'author_id' => 9, 'status' => true ],

            //    //32
            //    ['id' => 32, 'name'    => 'Để Con Được Ốm' , 'brand' => 'd', 'price' => 56000 , 
            //    'smallDes' => 'Số kiến thức cơ bản chăm sóc trẻ',
            //    'image' => '32.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //    'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //    (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //    'cat_id' =>4 , 'author_id' => 5, 'status' => true ],
            //    //33
            //    ['id' => 33, 'name'    => 'Giáo Dục Con Của Người Do Thái' , 'brand' => 'd', 'price' => 99000 , 
            //    'smallDes' => 'Phương Pháp Giáo Dục',
            //    'image' => '33.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //    'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //    (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //    'cat_id' =>4 , 'author_id' => 1, 'status' => true ],

            //    //34
            //    ['id' => 34, 'name'    => 'Đọc Vị Mọi Vấn Đề Của Trẻ' , 'brand' => 'd', 'price' => 77000 , 
            //    'smallDes' => 'Chăm sóc con trẻ',
            //    'image' => '34.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //    'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //    (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //    'cat_id' =>4 , 'author_id' => 3, 'status' => true ],

            //    //35
            //    ['id' => 35, 'name'    => 'Đọc Vị Mọi Vấn Đề Của Trẻ' , 'brand' => 'd', 'price' => 154000 , 
            //    'smallDes' => 'Hướng dẫn đồ ăn cho trẻ .',
            //    'image' => '35.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //    'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //    (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //    'cat_id' =>4 , 'author_id' => 5, 'status' => true ],

            //    //36
            //    ['id' => 36, 'name'    => 'Vô Cùng Tàn Nhẫn, Vô Cùng Yêu ' , 'brand' => 'd', 'price' => 167000 , 
            //    'smallDes' => 'Giáo dục con cái',
            //    'image' => '35.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //    'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //    (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //    'cat_id' =>4 , 'author_id' => 9, 'status' => true ],

            //     //37
            //     ['id' => 37, 'name'    => 'Cẩm Nang Siêu Ông Bố Tương Lai' , 'brand' => 'd', 'price' => 167000 , 
            //     'smallDes' => 'Trở thành bố tốt.',
            //     'image' => '37.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //     'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //     (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //     'cat_id' =>4 , 'author_id' => 10, 'status' => true ],

            //     //38
            //     ['id' => 38, 'name'    => '100 Trò Vui Cho Cha Con Chúng Mình' , 'brand' => 'd', 'price' => 189000 , 
            //     'smallDes' => 'Và làm cho con yêu',
            //     'image' => '38.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //     'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //     (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //     'cat_id' =>4 , 'author_id' => 11, 'status' => true ],

            //     //39
            //     ['id' => 39, 'name'    => 'Đừng Coi Cha Là Phụ Huynh' , 'brand' => 'd', 'price' => 79000 , 
            //     'smallDes' => 'Làm bạn cùng con',
            //     'image' => '39.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //     'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //     (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //     'cat_id' =>4 , 'author_id' => 12, 'status' => true ],

            //     //40
            //     ['id' => 40, 'name'    => 'Mẹ Biết Lười Con Nên Người' , 'brand' => 'd', 'price' => 119000 , 
            //     'smallDes' => 'và làm cho con yêu',
            //     'image' => '40.jpg', 'intro'=> 'Thai giáo theo nghĩa rộng chính là thông qua chế độ dinh dưỡng, môi trường và tinh thần để thúc đẩy sự phát triển toàn diện của trẻ. Theo nghĩa hẹp thai giáo là căn cứ vào thời điểm cụ thể để áp dụng các biện pháp như: nghe nhạc, chiếu sáng, tắm nắng, nói chuyện... để giúp bé chào đời khỏe, đẹp, thông minh.',
            //     'review' => 'Hiện nay dòng sách về thai giáo đã quá nhiều rồi, nhưng cuốn sách này lại khiến tôi có cách nhìn nhận mới, không ngờ thai giáo đơn giản mà lại hiệu quả thế.
            //     (Mẹ Tôm). Tôi cho rằng kiến thức thai giáo hầu hết đều "giáo điều" khô cứng, cho tới khi đọc cuốn sách này, có nó trong tay, tôi chỉ cần cùng bé yêu nghe một bản nhạc, cắm một lọ hoa, đi dạo một vòng... thế là hoàn thành bài thai giáo của một ngày. ',
            //     'cat_id' =>4 , 'author_id' => 8, 'status' => true ],


            //     //41
            //     ['id' => 41, 'name'    => 'Giải Thích Ngữ Pháp Tiếng Anh' , 'brand' => 'd', 'price' => 124000 , 
            //     'smallDes' => 'Ngữ pháp tiếng anh',
            //     'image' => '41.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //     'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //     'cat_id' =>5 , 'author_id' => 8, 'status' => true ],
            //     //42
            //     ['id' => 42, 'name'    => 'Ngữ Pháp Tiếng Anh Dành Cho Học Sinh' , 'brand' => 'd', 'price' => 223000 , 
            //     'smallDes' => 'Ngữ pháp tiếng anh',
            //     'image' => '42.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //     'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //     'cat_id' =>5 , 'author_id' => 10, 'status' => true ],

            //     //43
            //     ['id' => 43, 'name'    => 'Luyện Thi Olympic Tiếng Anh' , 'brand' => 'd', 'price' => 133000 , 
            //     'smallDes' => 'Ngữ pháp tiếng anh',
            //     'image' => '43.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //     'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //     'cat_id' =>5 , 'author_id' => 8, 'status' => true ],

            //      //44
            //      ['id' => 44, 'name'    => 'Bài Tập Ngữ Pháp Tiếng Nhật Căn Bản' , 'brand' => 'd', 'price' => 245000 , 
            //      'smallDes' => 'Ngữ pháp tiếng anh',
            //      'image' => '44.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //      'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //      'cat_id' =>5 , 'author_id' => 5, 'status' => true ],

            //       //45
            //       ['id' => 45, 'name'    => 'Làm Chủ Ngữ Pháp Tiếng Hàn 3' , 'brand' => 'd', 'price' => 245000 , 
            //       'smallDes' => 'Ngữ pháp tiếng Hàn',
            //       'image' => '45.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //       'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //       'cat_id' =>5 , 'author_id' => 11, 'status' => true ],

            //       //46
            //       ['id' => 46, 'name'    => '15 Phút Luyện Kanji Mỗi Ngày' , 'brand' => 'd', 'price' => 175000 , 
            //       'smallDes' => 'Ngữ pháp tiếng Hàn',
            //       'image' => '46.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //       'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //       'cat_id' =>5 , 'author_id' => 12, 'status' => true ],

            //       //47
            //       ['id' => 47, 'name'    => '500 Chữ Kanji Cơ Bản' , 'brand' => 'd', 'price' => 129000 , 
            //       'smallDes' => 'Ngữ pháp tiếng Hàn',
            //       'image' => '47.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //       'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //       'cat_id' =>5 , 'author_id' => 12, 'status' => true ],
            //         //48
            //       ['id' => 48, 'name'    => 'N3 - 1800 Từ Căn Bản' , 'brand' => 'd', 'price' => 49000 , 
            //       'smallDes' => 'Ngữ pháp tiếng Hàn',
            //       'image' => '48.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //       'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //       'cat_id' =>5 , 'author_id' => 10, 'status' => true ],


            //       //49
            //       ['id' => 49, 'name'    => 'Tập Viết Chữ Hán Theo Giáo Trình Hán ' , 'brand' => 'd', 'price' => 149000 , 
            //       'smallDes' => 'Ngữ pháp tiếng Trung',
            //       'image' => '49.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //       'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //       'cat_id' =>5 , 'author_id' =>9, 'status' => true ],

            //       //50
            //       ['id' => 50, 'name'    => 'Học Chữ Hán Chuẩn - Tập 1' , 'brand' => 'd', 'price' => 156000 , 
            //       'smallDes' => 'Ngữ pháp tiếng Trung',
            //       'image' => '50.jpg', 'intro'=> 'Sách Giải Thích Ngữ Pháp Tiếng Anh Với Bài Tập Và Đáp Án được biên soạn thành 9 chương, đề cập đến những vấn đề ngữ pháp từ cơ bản đến nâng cao.',
            //       'review' => 'Nội dung các chương được biên soạn dựa trên ngữ pháp tiếng Anh hiện đại, giải thích cặn kẽ, rõ ràng các cách dùng và quy luật mà người học cần nắm vững: đồng thời chỉ ra những quy luật khác nhau giữa tiếng anh của người Anh (British English) và tiếng Anh của người Mỹ (American English. Cuối mỗi phần ngữ pháp đều có bài tập đa dạng để giúp người học nắm vững phần lý thuyết. Hơn nữa, hiện nay hình thức thi trắc nghiệm đang được áp dụng trong các kỳ thi, nên trong sách này chúng tôi biên soạn một số phần bài tập trắc nghiệm để đáp ứng nhu cầu của người học trong tình hình mới.',
            //       'cat_id' =>5 , 'author_id' =>9, 'status' => true ],

            // //51
            // ['id' => 51 , 'name'    => 'Nấu Ăn Ngon : Các Món Chưng - Hấp' , 'brand' => 'd', 'price' => 21460 , 'smallDes' => 'Chưng – hấp ', 'image' => '51.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian. Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 9, 'status' => true ],
            // //52
            // ['id' => 52 , 'name'    => 'Những Món Ngon Việt Nam – phần 1' , 'brand' => 'd', 'price' => 121360 , 'smallDes' => 'Đậm chất dân việt ', 'image' => '52.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 10, 'status' => true ],
            // //53 
            // ['id' => 53 , 'name'    => 'Những Món Ngon Việt Nam – phần 2' , 'brand' => 'd', 'price' => 124460 , 'smallDes' => 'Chưng – hấp ', 'image' => '53.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 11, 'status' => false ],
            
            // //54
            // ['id' => 54 , 'name'    => ': Các Món Ăn Chơi Đơn Giản, Dễ Làm' , 'brand' => 'd', 'price' => 154460 , 'smallDes' => ' Món ngon ba miền', 'image' => '55.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 12, 'status' => false ],

            // //55
            // ['id' => 55 , 'name'    => 'Thực Đơn Bốn Món' , 'brand' => 'd', 'price' => 75500 , 'smallDes' => 'Chưng – hấp ', 'image' => '55.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 11, 'status' => false ],

            // //56
            // ['id' => 56 , 'name'    => 'Những Món Ngon Việt Nam – phần 2' , 'brand' => 'd', 'price' => 124460 , 'smallDes' => 'Món ngon mỗi ngày', 'image' => '56.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 10, 'status' => false ],
             
            // // 57
            // ['id' => 57 , 'name'    => 'Món Ăn Của "Vua Đầu Bếp" Tự Phong' , 'brand' => 'd', 'price' => 150000 , 'smallDes' => 'Chưng – hấp ', 'image' => '57.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 8, 'status' => false ],

            // //58
            // ['id' => 58 , 'name'    => 'Món Ăn Được Nhiều Người Ưa Thích' , 'brand' => 'd', 'price' => 22500 , 'smallDes' => ' Vua đầu bếp', 'image' => '58.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 9, 'status' => false ],

            // //59
            // ['id' => 59 , 'name'    => '30 Món Ăn Ngày Thường' , 'brand' => 'd', 'price' => 115000 , 'smallDes' => 'Những món ăn ngày thường', 'image' => '59.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 10, 'status' => false ],

            // //60
            // ['id' =>60 , 'name'    => 'Món Ngon Xứ Huế' , 'brand' => 'd', 'price' => 130000 , 'smallDes' => 'Công thức nấu món Huế', 'image' => '60.jpg', 'intro'=> 'Gà hấp hàn, Gà hấp rau răm, Gà chưng dừa
            // Gà hấp muối, Gà tiềm ớt hiểm, Chả đùm, Chả phổi, Khấu nhục, Tim heo chưng đậu den, Nấm đông cô tóc tiên, Thịt bò băm cà tím Tôm hấp nước dừa
            // ',   'review' => 'Nấu một bữa ăn ngon cho gia đình là niềm hạnh phúc tuyệt vời của người mẹ, người vợ. Đôi khi, những món ăn chơi đơn giản sẽ là bí quyết tốt nhất giúp bạn có thể chuẩn bị mâm cơm đầy đù chất dinh dưỡng và ngon miệng mà không quá mất nhiều thời gian.
            // Cuốn sách giới thiệu những món ăn thường gặp nhưng không phải ai cũng biết cách chế biến đúng cách: Bún mắm cá cơm, nộm mướp đắng, ngao xào lá quế, khoai môn cuộn tôm...
            // ,Khi những món ăn hằng ngày đã quá quen thuộc với bạn. Hẳn một người yêu thích bếp núc sẽ nghĩ ngay đến việc tìm những món mới và thú vị hơn cả là tự sáng tạo ra món độc đáo cho bản thân và gia đình.', 'cat_id' =>6 , 'author_id' => 12, 'status' => false ],
            
//         ]);
//     }
// }

