<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

  <!-- Profile -->
  <div class="profile">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-6">
              <?php echo $this->Html->link('Back', array('controller' => 'users', 'action' => 'view', $user->id)); ?>
            </div>
            <div class="col-6">
                <?= $this->Html->link('Update Profile',array('controller' => 'profiles', 'action' => 'add')) ?> 
            </div>
          </div>

          <!-- Profile Header -->
          <div class="row">
            <div class="col-md-12">
              <div class="card card-body  text-white mb-3" style="background-color: purple;">
                <div class="row">
                  <div class="col-4 col-md-3 m-auto">
                    <img class="rounded-circle" src="#" alt="" />
                    
                  </div>
                </div>
                <div class="text-center">
                  <h1 class="display-4 text-center"><?= h($user->username) ?></h1>
                  <p class="lead text-center">Developer at Btech Solution Ghana</p>
                  <p>Ghana, West Africa</p>
                  <p>
                    <a class="text-white p-2" href="#">
                      <i class="fas fa-globe fa-2x"></i>
                    </a>
                    <a class="text-white p-2" href="#">
                      <i class="fab fa-twitter fa-2x"></i>
                    </a>
                    <a class="text-white p-2" href="#">
                      <i class="fab fa-facebook fa-2x"></i>
                    </a>
                    <a class="text-white p-2" href="#">
                      <i class="fab fa-linkedin fa-2x"></i>
                    </a>
                    <a class="text-white p-2" href="#">
                      <i class="fab fa-instagram fa-2x"></i>
                    </a>
                  </p>
                </div>
              </div>
            </div>
          </div>

          <!-- Profile About -->
          <div class="row">
            <div class="col-md-12">
              <div class="card card-body bg-light mb-3">
                <h3 class="text-center text-info"><?= h($user->username) ?> Bio</h3>
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Provident fuga cum necessitatibus blanditiis vel,
                  officia facere porro esse numquam assumenda doloremque saepe aliquam nemo excepturi aliquid maiores! Excepturi,
                  libero repudiandae.
                </p>
                <hr />
                <h3 class="text-center text-info">Skill Set</h3>
                <div class="row">
                  <div class="d-flex flex-wrap justify-content-center align-items-center">
                    <div class="p-3">
                      <i class="fa fa-check"></i> HTML</div>
                    <div class="p-3">
                      <i class="fa fa-check"></i> CSS</div>
                    <div class="p-3">
                      <i class="fa fa-check"></i> JavaScript</div>
                    <div class="p-3">
                      <i class="fa fa-check"></i> Python</div>
                    <div class="p-3">
                      <i class="fa fa-check"></i> C#</div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Profile Creds -->
          <div class="row">
            <div class="col-md-6">
              <h3 class="text-center text-info">Experience</h3>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Microsoft</h4>
                  <p>Oct 2011 - Current</p>
                  <p>
                    <strong>Position:</strong> Senior Developer
                  </p>
                  <p>
                    <strong>Description:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus dicta enim
                    excepturi laborum voluptatem nam provident quisquam facere. Quae?</p>
                </li>
                <li class="list-group-item">
                  <h4>Sun Microsystems</h4>
                  <p>Oct 2004 - Nov 2011</p>
                  <p>
                    <strong>Position: </strong> Systems Admin</p>
                  <p>
                    <p>
                      <strong>Location: </strong> Miami, FL
                    </p>
                    <strong>Description: </strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus dicta
                    enim excepturi laborum voluptatem nam provident quisquam facere. Quae?</p>
                </li>
              </ul>
            </div>
            <div class="col-md-6">
              <h3 class="text-center text-info">Education</h3>
              <ul class="list-group">
                <li class="list-group-item">
                  <h4>Univeresity Of Washington</h4>
                  <p>Sep 1993 - June 1999</p>
                  <p>
                    <strong>Degree: </strong>Masters</p>
                  <p>
                    <strong>Field Of Study: </strong>Computer Science</p>
                  <p>
                    <p>
                      <strong>Description:</strong> Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde doloribus dicta
                      enim excepturi laborum voluptatem nam provident quisquam facere. Quae?</p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>