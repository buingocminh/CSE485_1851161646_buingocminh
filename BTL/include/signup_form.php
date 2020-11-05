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
                            <input name="Birthday" type="text" placeholder="Ngày sinh">
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
                            <select name="Licence">
                                <option value="">Chọn Khóa đào tạo</option>
                                <option value="Bằng lái xe hạng B1">Bằng lái xe hạng B1</option>
                                <option value="Bằng lái xe hạng B2">Bằng lái xe hạng B2</option>
                                <option value="Bằng lái xe ô tô hạng C">Bằng lái xe ô tô hạng C</option>
                                <option value="Bằng lái xe ô tô hạng D">Bằng lái xe ô tô hạng D</option>
                                <option value="Bằng lái xe ô tô hạng E">Bằng lái xe ô tô hạng E</option>
                                <option value="Bằng lái xe rơ-móc hạng F">Bằng lái xe rơ-móc hạng F</option>
                                <option value="Bằng lái xe gắn máy hạng A1">Bằng lái xe gắn máy hạng A1</option>
                                <option value="Bằng lái xe mô tô hạng A2">Bằng lái xe mô tô hạng A2</option>
                            </select>
                        </p>
                        <p class="rows">
                            <textarea name="Content" cols="" rows="3" placeholder="Lời nhắn ..."></textarea>
                        </p>
                        <p>
                            <input type="submit"  id="btnRegister" name="btnRegister" value="Đăng ký">
                        </p>
                    </form>
                </aside>