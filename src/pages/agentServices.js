import * as React from "react"
import { StaticImage } from "gatsby-plugin-image"
import Layout from "../components/layout"
import Seo from "../components/seo"

const AgentServicesPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" />
    <div className="body-container">
      <div className="secctionfotos" />
      <div className="body-container-header" id="text">
        Agentes de carga
      </div>
      <div className="body-container-text">
        <p>
          Desde hace más de 20 años, nos hemos integrado a la red global de
          agentes de carga internacional World Net Associates (WNA).
        </p>
        <p>
          Así es que podemos ofrecer tarifas competitivas en cada modalidad de
          transporte. Disponibilidad, regularidad y frecuencia.
        </p>
        <ul>
          <li>Retiro, recepción e inspección.</li>
          <li>Embalajes</li>
          <li>Cargas aéreas - consolidadas y completas.</li>
          <li>Marítimas - LCL y FCL - Contenedores Especiales - Chartering.</li>
          <li>
            Terrestres - Consolidados y Completos - Servicio de flete a toda la
            Argentina.
          </li>
          <li>Gestión de cargas peligrosas.</li>
        </ul>
        <a
          href="http://www.wnaweb.com/p-locations"
          style={{ opacity: 1, cursor: "pointer" }}
        >
          <StaticImage src="../images/vmap.svg" imgClassName="mapaWNA" />
        </a>
      </div>
    </div>
  </Layout>
)

export default AgentServicesPage
