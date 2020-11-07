<aside id="getbox">

                    <h2><i class="fa fa-paper-plane"></i>Đăng ký khóa học</h2>
                    <span id="complete">Đăng kí thành công</span>

                    <form name="frmRegister" id="frmRegister" method="post" action="register.php" onSubmit="return chkRegister();">
                        <p class="rows">
                            <input type="hidden" name="PageUrl" value="http://www.truongdaylaixethongnhat.com/">
                            <input name="Name" type="text"  placeholder="Họ và tên">
                            <i class="fa fa-user" aria-hidden="true"></i>
                        </p>
                        <p class="rows">
                            <input name="Birthday" type="date"  >
                            <i class="fa fa-calendar"></i>
                        </p>
                        
                        <p class="rows">
                            <input name="Address" type="text" placeholder="Địa chỉ">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                        </p>
                        <p class="rows">
                            <input name="Phone" type="text" placeholder="Điện thoại">
                            <i class="fa fa-phone-square" aria-hidden="true"></i>
                        </p>
                        <p class="rows">
                            <input name="Email" type="text" placeholder="Email">
                            <i class="fa fa-envelope"></i>
                        </p>
                        <p class="rows">
                            <select name="Class">
                            <option value="0" selected>Chọn Khóa đào tạo</option>
                            <?php 
                                $sql="SELECT * FROM class";
                                $result=mysqli_query($conn,$sql);
                                while($row=mysqli_fetch_assoc($result)){
                            ?>
                                <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
                            <?php } ?>
                            </select>
                        </p>
                        <p class="rows">
                            <textarea name="Content" cols="" rows="3" placeholder="Lời nhắn ..."></textarea>
                        </p>
                        <p>
                            <input type="button"  id="btnRegister" name="btnRegister" value="Đăng ký">
                        </p>
                        
                    </form>
                </aside>
               



                