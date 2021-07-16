import * as React from "react"
import Layout from "../components/layout"
import Seo from "../components/seo"

const LoadServicesPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" />
    <div className="body-container">
      <div className="secctionfotos" />
      <div className="body-container-header" id="text">
        Carga de Proyecto
      </div>
      <div className="body-container-text">
        <p>
          Proveemos un servicio logístico completo desde el retiro en origen
          hasta la entrega en destino final, cubriendo cada una de las etapas
          intermedias incluyendo la destinación aduanera correspondiente.
        </p>
        <p>
          Contamos con la experiencia necesaria para obtener el mejor de los
          resultados en los tiempos planificados.
        </p>
      </div>
    </div>
  </Layout>
)

export default LoadServicesPage
