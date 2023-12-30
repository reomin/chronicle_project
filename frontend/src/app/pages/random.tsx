import Footer from '../components/Footer'
import  Header from '../components/Header'
import MyHistoryChart from '@/components/MyhistoryChart'
import { useState } from 'react'
import { MyHistory } from '../domain/entities' 



    type Props = {
        history: MyHistory // MyHistoryに変更
      }
const Random: React.FC<Props> = ( {history} ) => { // 引数にhistoryを追加

    const [showHistory, setShowHistory] = useState<MyHistory>(history) 
        const getHistory = async () => {
            const method = 'GET'
            const headers = {
                Accept: 'application/json',
                'Content-Type': 'application/json',
                }
                window.scroll({ top: 0, behavior: 'smooth' })
                try {
            
                const res = await fetch('http://localhost:8000/api/random', { method, headers })
                const resJson = await res.json()
                if (resJson?.status == 'ok') {
                    setShowHistory(resJson?.history)
                } else {
                alert('failed to get history')
                }
                } catch (e) {
                console.error(e)
                alert('failed to fetch')
                }
            }
            return (
                <div>
                    <Header/>
                    {history && <MyHistoryChart myEvents={showHistory.events}width='90%' readonly={true} />}
                    <button className='mt-3' type='button' onClick={getHistory}>別の年表を見る</button> {/* 追記 */}
                    <Footer />
                </div>
            )
            }
export default Random;
