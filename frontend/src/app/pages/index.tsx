import type { GetServerSideProps } from 'next'
import Head from 'next/head'
import Link from 'next/link'
// import { Container } from 'react-bootstrap'
import Footer from '../components/Footer'
import Header from '../components/Header'
// import HomeHeader from '../components/HomeHeader'
// import MyHistoryList from '../components/MyHistoryList'
// import { Config } from '../config'
import { MyHistory } from '../domain/entities'
// import styles from '../styles/pages.module.css'

type Props = {
  histories: MyHistory[]
  totalCount: number
}

const Home: React.FC<Props> = ({ histories, totalCount }) => {
  return (
    <>
      <Head>
        <title>クロニクル</title>
        <meta name='viewport' content='initial-scale=1.0, width=device-width' />
      </Head>
  

      <Header/>
      <h1 className='flex justify-center mt-20'>こんにちは</h1>
      {/* <Header />
      <HomeHeader />
      <Container className='mt-2 mb-2'> */}
        {/* <h2 className={styles.content_header}>自分年表 (新着順)</h2> */}
      {/* </Container>
      <MyHistoryList histories={histories} />
      <Container className='mb-4'>
        <Link href='/search'>{`自分年表をもっと見る (全${totalCount}件)`}</Link>
      </Container>
      <Footer /> */}
      <Footer/>
    </>
  )
}

// // MEMO: getServerSidePropsはブラウザ上ではなくサーバー上で実行される。
// export const getServerSideProps: GetServerSideProps = async (context) => {
//   // データベースと通信するためのクラスをインスタンス化する
//   const repository = await Config.getRepository()
//   // 最新2件分の自分年表と、全ての自分年表の件数を取得する
//   const { histories, totalCount } = await repository.searchHistory('', 0, 2)
//   return { props: { histories, totalCount } }
// }

export default Home
