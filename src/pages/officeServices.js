import * as React from "react"
import Layout from "../components/layout"
import Seo from "../components/seo"

const OfficeServicesPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" />
    <div className="body-container">
      <div className="secctionfotos" />
      <div className="body-container-header" id="text">
        Oficina Externa de Compras Internacionales
      </div>
      <div className="body-container-text">
        <p>
          Contamos con una selecta red de proveedores a través de los que
          estamos en condiciones de suplir las múltiples demandas del mercado.
          Le podemos ofrecer desde la búsqueda del producto hasta la puesta en
          destino final.
        </p>
        <p>
          Si Ud. aun no es importador, también podemos acordar una gestión de
          compra por su cuenta generando finalmente una venta en plaza del
          producto.
        </p>
      </div>
    </div>
  </Layout>
)

export default OfficeServicesPage
