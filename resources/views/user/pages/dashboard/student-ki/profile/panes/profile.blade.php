<div class="instructor__cover-bg" data-background="{{ asset('assets/img/bg/student_bg.jpg') }}">
    <div class="instructor__cover-info">
        <div class="instructor__cover-info-left">
            <div class="thumb">
                <img src="{{ asset('assets/img/courses/details_instructors02.jpg') }}" alt="img">
            </div>
            <button title="Upload Photo"><i class="fas fa-camera"></i></button>
        </div>
        <div class="instructor__cover-info-right">
            <a href="#" class="btn btn-two arrow-btn">Edit Cover Photo</a>
        </div>
    </div>
</div>
<div class="instructor__profile-form-wrap">
    <form action="#" class="instructor__profile-form">
        <div class="row">
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="firstname">Nama Awal</label>
                    <input id="firstname" type="text" value="John">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="lastname">Nama Akhir</label>
                    <input id="lastname" type="text" value="Due">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="username">User Name</label>
                    <input id="username" type="text" value="johndue">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="email">Email</label>
                    <input id="email" type="text" value="Full Stack Developer">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp">
                    <label for="phonenumber">Nomor Telepon</label>
                    <input id="phonenumber" type="tel" value="+1-202-555-0174">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-grp select-grp">
                    <label for="skill">Skill</label>
                    <select id="skill" name="skill">
                        <option value="Full Stack Developer">Full Stack Developer</option>
                        <option value="Front End Developer">Front End Developer</option>
                        <option value="Back End Developer">Back End Developer</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="form-grp">
            <label for="bio">Bio</label>
            <textarea id="bio">I'm the Front-End Developer for #ThemeGenix in New York, OR. I am passionate about UI effects, animations, and creating intuitive, dynamic user experiences.</textarea>
        </div>
        <div class="submit-btn mt-25">
            <button type="submit" class="btn">Update Profil</button>
        </div>
    </form>
</div>