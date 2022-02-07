<footer class="footer">

    <!-- Footer Top -->
    <div class="footer-top">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-md-6">
  
            <!-- Footer Widget -->
            <div class="footer-widget footer-about">
              <div class="footer-logo">
                <img src="{{ asset('/packages/img/logo.png') }}" alt="logo">
              </div>
              <div class="footer-about-content">
                <p>
                  &copy; Todos os direitos reservados<br/>
                  CENTRO DE TECNOLOGIA DE ENSINO ESPECIALIZADO LTDA<br/>
                  CNPJ: 40.912.042/0001-13
                </p>
                <div class="social-icon">
                  <ul>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-facebook-f"></i> </a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-twitter"></i> </a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </li>
                    <li>
                      <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /Footer Widget -->
  
          </div>
  
          <div class="col-lg-3 col-md-6">
  
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">Especialistas</h2>
              <ul>
                <li><a href="equipe.html">A Equipe</a></li>
                {% if not auth %}
                  <li><a href="{{ path_for('web.login.specialist') }}">ADM/login</a></li>
                  <li><a href="{{ path_for('web.register.specialist') }}">Quero ser um especialista</a></li>
                {% endif %}
              </ul>
            </div>
            <!-- /Footer Widget -->
  
          </div>
  
          <div class="col-lg-3 col-md-6">
  
            <!-- Footer Widget -->
            <div class="footer-widget footer-menu">
              <h2 class="footer-title">Cursos</h2>
              <ul>
                <li><a href="cursos.html">Nossos Cursos</a></li>
                <li><a href="mentoria-live.html">Mentoria</a></li>
                {% if not auth %}
                  <li><a href="{{ path_for('web.login.student') }}">Login</a></li>
                  <li><a href="{{ path_for('web.register.student') }}">Cadastre-se</a></li>
                {% endif %}
              </ul>
            </div>
            <!-- /Footer Widget -->
  
          </div>
  
          <div class="col-lg-3 col-md-6">
  
            <!-- Footer Widget -->
            <div class="footer-widget footer-contact">
              <h2 class="footer-title">Fale Conosco</h2>
              <div class="footer-contact-info">
                <div class="footer-address">
                  <span><i class="fas fa-map-marker-alt"></i></span>
                  <p>
                    Empresarial Simonsen, Sala 207<br/>
                    Rua Frederico Simões - Caminho das Árvores, 222<br/>
                    Salvador - BA, CEP: 41.820-774
                  </p>
                </div>
                <p>
                  <i class="fas fa-phone-alt"></i>
                  +55 (71) 3414-9174 / 3414-9173
                </p>
                <p class="mb-0">
                  <i class="fas fa-envelope"></i>
                  contato@espes.com.br
                </p>
              </div>
            </div>
            <!-- /Footer Widget -->
  
          </div>
  
        </div>
      </div>
    </div>
    <!-- /Footer Top -->
  
    <!-- Footer Bottom -->
    <div class="footer-bottom">
      <div class="container-fluid">
  
        <!-- Copyright -->
        <div class="copyright">
          <div class="row">
            <div class="col-12 text-center">
              <div class="copyright-text">
                <p class="mb-0">&copy; 2021 NVGO - Todos os direitos reservados.</p>
              </div>
            </div>
          </div>
        </div>
        <!-- /Copyright -->
  
      </div>
    </div>
    <!-- /Footer Bottom -->
  
  </footer>
  