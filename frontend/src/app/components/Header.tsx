import { signIn, useSession } from 'next-auth/react'
import Image from 'next/image'
import Link from 'next/link'
import React from 'react'
import { Container, Nav, Navbar,Col, } from 'react-bootstrap'
import mychro_logo from '../images/mychro-logo.png'
import user_logo from '../images/human-icon.png'
import styles from '../styles/Header.module.css'


const Header = () =>{

    return(
        <div className='dark:bg-gray-800 rounded-lg shadow m-4 underline'>
            <div className='w-full'>
                <div className="text-white flex justify-between max-w-5xl ml-20 py-5">
                    <h1 className="text-[min(13vw,30px)]">chronicle作成ページ</h1>
                    <div className="flex items-center">
                    {/* ログインをしていたら、マイページに遷移するようにする */}
                        <Link href={"/login/"}>
                            <h1 className='mx-20'>ログインはこちら</h1>
                        </Link>
                        <Link href ={"/register/"}>
                            <h1>新規登録はこちら</h1>   
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    )
}

export default Header

