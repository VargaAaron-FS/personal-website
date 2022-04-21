<?php
// Connect to database
$conn = mysqli_connect('localhost', 'iamaaronvarga', 'Password12345', 'iamaaronvarga_db');
// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
// Write query for all projects
$sql = 'SELECT title, url, img_url, id FROM projects ORDER BY created';
// Make query and get result
$result = mysqli_query($conn, $sql);
// Fetch resulting rows as an array
$projects = mysqli_fetch_all($result, MYSQLI_ASSOC);
// Free result from memory
mysqli_free_result($result);
// Close connection
mysqli_close($conn);
?>
<main class="home">
    <div class="container">
        <section>
            <h2><span>#</span> About Me <span><i class="fa-solid fa-arrow-turn-down"></i></span></h2>
            <p>I am a UI Designer and Full Stack Developer who loves to use super clean vanilla code unless other
                technologies are absolutely necessary.</p>
            <p>I grew up first designing user interfaces in 2002 and later I dove into the development side of things as
                well.</p>
            <p>My favorite coding languages and technologies are HTML, CSS/LESS,
                JavaScript, PHP, and MySQL. I love the LAMP stack! I also have experience with the MERN stack.</p>
            <p>I have earned a BA in Digital Media Design and I am currently finishing a BS in Web Development.</p>
            <button class="primary_button">View Resume</button>
        </section>
        <section>
            <h2><span>#</span> My Stacks <span><i class="fa-solid fa-arrow-turn-down"></i></span></h2>
            <div class="flexbox">
                <div class="flex-item">
                    <h3><span><i class="fa-solid fa-layer-group"></i></span>LAMP</h3>
                    <ul>
                        <li><a href="https://www.linux.org/" target="_blank">Linux</a></li>
                        <li><a href="https://httpd.apache.org/" target="_blank">Apache</a></li>
                        <li><a href="https://www.mysql.com/" target="_blank">MySQL</a></li>
                        <li><a href="https://www.php.net/" target="_blank">PHP</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript"
                                target="_blank">JavaScript</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">CSS</a>/<a
                                href="https://lesscss.org/" target="_blank">LESS</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics"
                                target="_blank">HTML</a></li>
                    </ul>
                </div>
                <div class="flex-item">
                    <h3><span><i class="fa-solid fa-layer-group"></i></span>MERN</h3>
                    <ul>
                        <li><a href="https://www.mongodb.com/" target="_blank">MongoDB</a></li>
                        <li><a href="https://expressjs.com/" target="_blank">Express JS</a></li>
                        <li><a href="https://reactjs.org/" target="_blank">React JS</a></li>
                        <li><a href="https://nodejs.org/" target="_blank">Node JS</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Web/CSS" target="_blank">CSS</a>/<a
                                href="https://lesscss.org/" target="_blank">LESS</a></li>
                        <li><a href="https://developer.mozilla.org/en-US/docs/Learn/Getting_started_with_the_web/HTML_basics"
                                target="_blank">HTML</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <h2><span>#</span> My Tools <span><i class="fa-solid fa-arrow-turn-down"></i></span></h2>
            <div class="flexbox">
                <div class="flex-item">
                    <h3><span><i class="fa-solid fa-compass-drafting"></i></span>Design</h3>
                    <ul>
                        <li><a href="https://www.adobe.com/products/xd.html" target="_blank">Adobe XD</a></li>
                        <li><a href="https://www.adobe.com/products/photoshop.html" target="_blank">Adobe Photoshop</a>
                        </li>
                        <li><a href="https://www.adobe.com/products/illustrator.html" target="_blank">Adobe
                                Illustrator</a></li>
                        <li><a href="https://www.adobe.com/products/aftereffects.html" target="_blank">Adobe After
                                Effects</a></li>
                        <li><a href="https://www.adobe.com/products/dimension.html" target="_blank">Adobe Dimensions</a>
                        </li>
                        <li><a href="https://www.adobe.com/products/animate.html" target="_blank">Adobe Animate</a></li>
                    </ul>
                </div>
                <div class="flex-item">
                    <h3><span><i class="fa-solid fa-code"></i></span>Development</h3>
                    <ul>
                        <li><a href="https://git-scm.com/" target="_blank">Git</a>/<a href="https://github.com/"
                                target="_blank">GitHub</a></li>
                        <li><a href="https://www.mamp.info/" target="_blank">MAMP</a></li>
                        <li><a href="https://code.visualstudio.com/" target="_blank">VS Code</a></li>
                        <li><a href="https://codekitapp.com/" target="_blank">CodeKit</a></li>
                        <li><a href="https://www.mysql.com/products/workbench/" target="_blank">MySQL Workbench</a></li>
                        <li><a href="https://www.postman.com/" target="_blank">Postman</a></li>
                    </ul>
                </div>
            </div>
        </section>
        <section>
            <h2><span>#</span> Recent Projects <span><i class="fa-solid fa-arrow-turn-down"></i></span></h2>
            <div class="recent-projects-grid">
                <?php foreach ($projects as $project) { ?>
                <a href="<?php echo htmlspecialchars($project['url']) ?>" class="recent-projects-grid-item">
                    <img src="<?php echo htmlspecialchars($project['img_url']); ?>"
                        alt="<?php echo htmlspecialchars($project['title']); ?>">
                    <h3><?php echo htmlspecialchars($project['title']); ?><span><i
                                class="fa-solid fa-rocket"></i></span>
                    </h3>
                </a>
                <?php
}?>
            </div>
            <button class="primary_button">View All Projects</button>
        </section>
        <section>
            <h2><span>#</span> Recent Blogs <span><i class="fa-solid fa-arrow-turn-down"></i></span></h2>
            <div class="recent-blogs-grid">
                <a href="#" class="recent-blogs-grid-item">
                    <img src="./images/blog-post-thumbnail.jpg" alt="Blog Post Thumbnail">
                    <h3>Blog Title<span><i class="fa-solid fa-newspaper"></i></span></h3>
                </a>
                <a href="#" class="recent-blogs-grid-item">
                    <img src="./images/blog-post-thumbnail.jpg" alt="Blog Post Thumbnail">
                    <h3>Blog Title<span><i class="fa-solid fa-newspaper"></i></span></h3>
                </a>
                <a href="#" class="recent-blogs-grid-item">
                    <img src="./images/blog-post-thumbnail.jpg" alt="Blog Post Thumbnail">
                    <h3>Blog Title<span><i class="fa-solid fa-newspaper"></i></span></h3>
                </a>
                <a href="#" class="recent-blogs-grid-item">
                    <img src="./images/blog-post-thumbnail.jpg" alt="Blog Post Thumbnail">
                    <h3>Blog Title<span><i class="fa-solid fa-newspaper"></i></span></h3>
                </a>
            </div>
            <button class="primary_button">View All Blogs</button>
        </section>
        <section>
            <h2><span>#</span> Contact Me <span><i class="fa-solid fa-arrow-turn-down"></i></span></h2>
            <button class="primary_button">Send Message</button>
        </section>
    </div>
</main>