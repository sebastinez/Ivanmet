import * as React from "react"
import { Link } from "gatsby"
import { StaticImage } from "gatsby-plugin-image"

import Layout from "../components/layout"
import Seo from "../components/seo"

const CustomServicesPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div className="secctionfotos zindex" id="serviciosaduanerosbg" />
    <div className="body-container">
      <div className="secctionfotos" id="serviciosaduanerosprimary" />
      <div className="body-container-header" id="text">
        Servicios Aduaneros
      </div>
      <div className="body-container-text">
        <h3>Asesoramiento</h3>
        <p>
          En Ivanmet solo pensamos en Ud. Por esto es que siempre estamos a su
          disposición para apoyarlos y asesorarlos en el mejor criterio aduanero
          aplicable a su necesidad.
        </p>
        <h3>Clasificación Arancelaria</h3>
        <p>
          Una de nuestras fortalezas es una correcta y efectiva clasificación
          arancelaria, contando con un importante background a través de todos
          los años de experiencia en la materia.Esto le permitirá tributar y
          manifestar ante la aduana lo que Ud. efectivamente esta importando o
          exportando.
        </p>
        <h3>Gestión Aduanera en todo el País</h3>
        <p>
          Contamos con una red de agentes en todo el país, la cual supervisamos
          y nos brinda una total tranquilidad de que sus operaciones están en
          las mejores manos.
        </p>
        <h3>Regímenes Especiales</h3>
        <p>
          Tenemos el conocimiento y estamos en línea con las ultimas normativas.
        </p>
        <h3>Gestión Off-Shore</h3>
        <p>
          Desde nuestros orígenes, hemos participado en este tipo de gestión,
          con conocimiento y aplicación de la normativa especifica.
          Suministrando un servicio logístico integral que al concluir cada
          operación, hemos demostrado el nivel de eficiencia alcanzado.
        </p>
      </div>
    </div>
  </Layout>
)

export default CustomServicesPage
