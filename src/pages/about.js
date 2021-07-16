import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

import Layout from "../components/layout"
import Seo from "../components/seo"

const AboutPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" />
    <div className="body-container">
      <div className="body-container-header">Quienes somos</div>
      <div className="body-container-text" id="body">
        <p>
          En Ivanmet S.A. contamos con más de 30 años de experiencia en proveer
          servicios de logística integral, desde el retiro de los materiales en
          origen, hasta su entrega en destino final.
        </p>
        <p>
          Con nuestra atención personalizada, Ud. estará informado en cada
          momento del status de sus materiales.
        </p>
        <p>
          Para nosotros no hay cargas pequeñas ni grandes. Todas nuestras
          operaciones merecen la dedicación y los estándares de calidad que su
          empresa requiere.
        </p>
        <b>Compromiso de calidad Ivanmet.</b>
      </div>
      <div
        className="secctionfotos section-container-fotos"
      />
    </div>
    <div className="body-servicios">
      <Link to="/agentServices">
        <div className="body-container-servicios">
          <StaticImage
            src="../images/truck-loading.svg"
            className="about-icons"
            layout="fullWidth"
          />
          <div className="description">Agentes de Carga</div>
        </div>
      </Link>
      <Link to="/customServices">
        <div className="body-container-servicios">
          <StaticImage
            src="../images/user-tie.svg"
            className="about-icons"
            layout="fullWidth"
          />
          <div className="description">Servicios Aduaneros</div>
        </div>
      </Link>
      <Link to="/loadServices">
        <div className="body-container-servicios">
          <StaticImage
            src="../images/industry.svg"
            className="about-icons"
            layout="fullWidth"
          />
          <div className="description">Carga de Proyecto</div>
        </div>
      </Link>
      <Link to="/officeServices">
        <div className="body-container-servicios">
          <StaticImage
            src="../images/home.svg"
            className="about-icons"
            layout="fullWidth"
          />
          <div className="description">
            Oficina Externa de Compras Internacionales
          </div>
        </div>
      </Link>
      <Link to="/insuranceServices">
        <div className="body-container-servicios">
          <StaticImage
            src="../images/handshake.svg"
            className="about-icons"
            layout="fullWidth"
          />
          <div className="description">Seguros de Transporte</div>
        </div>
      </Link>
    </div>
  </Layout>
)

export default AboutPage
