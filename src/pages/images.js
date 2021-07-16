import * as React from "react"
import Layout from "../components/layout"
import Seo from "../components/seo"
import SlideShow from "../components/slideshow"

const ImagesPage = () => (
  <Layout>
    <Seo title="IVANMET" />
    <div class="secctionfotos zindex" />
    <div class="body-container ">
      <div class="secctionfotos" />
      <div class="body-container-header" id="text">
        Imágenes de proyectos realizados
      </div>
      <div class="body-container-text" id="body">
        <SlideShow />
      </div>
    </div>
  </Layout>
)

export default ImagesPage
