<div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaihangA1.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-gan-may-hang-a1-2.html">BẰNG LÁI XE GẮN MÁY HẠNG A1</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaihangA2.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-mo-to-hang-a2-3.html">BẰNG LÁI XE MÔ TÔ HẠNG A2</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaiotoB1.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-hang-b1-4.html">BẰNG LÁI XE HẠNG B1</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaiotoB2.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-hang-b2-5.html">BẰNG LÁI XE HẠNG B2</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaiotoC.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-o-to-hang-c-6.html">BẰNG LÁI Ô TÔ HẠNG C</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaiotoD.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-o-to-hang-d-7.html">BẰNG LÁI XE Ô TÔ HẠNG D</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaiotoE.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-o-to-hang-e-8.html">BẰNG LÁI XE Ô TÔ HẠNG E</a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/banglaiotoF.jpg" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-romoc-hang-f-9.html">BẰNG LÁI XE RƠ MÓC HẠNG F</a>
                            </div>
                        </div>
                        <?php
                            $sql="SELECT * FROM class ORDER BY id ";
                            $result=mysqli_query($conn,$sql);
                            While($row=mysqli_fetch_assoc($result)){
                        ?>
                         <div class="item">
                            <div class="slide-image">
                                <img src="admin/img/<?php echo $row['picture']?>" alt="">
                                <a href="html/Khoa-dao-tao/bang-lai-xe-romoc-hang-f-9.html"><?php echo $row['name'] ?></a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>