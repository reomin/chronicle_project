// 修正　方の定義を追加する
import Link from "next/link";
import Image from "next/image";
import React from "react";
import title_logo from "../images/group_business.png";



const HomeHeader =()=>{
    return(
        <div className="text-center font-mono">
            <div className="float-left ml-20">
                <div>
                    <div>
                        <h1 className="text-5xl bold mt-20 mb-5">クロニクル、アプリケーション</h1>
                    </div>
                    <div className="mt-5 text-2x float-left">
                        <p>こんにちは、このページは、年表作成のアプリのトップです。</p>
                    </div>
                </div>
                <div className="mt-5 text-2x float-left">
                    <div>
                        <button className="float-left flex">
                            <Link href={"/login/"}>
                                <div className='mt-10 mr-10 text-2xl text-white bg-blue-500 p-3 rounded-full'>
                                    今日の年表を見る
                                </div>
                            </Link>
                        </button>

                        <button className="float-left flex">
                            <Link href={"/login/"}>
                                <div className='mt-10 mr-10 text-2xl text-white bg-blue-500 p-3 rounded-full'>
                                    今日の年表を見る
                                </div>
                            </Link>
                        </button>

                        <button className="float-left flex">
                            <Link href={"/login/"}>
                                <div className='mt-10 mr-10 text-2xl text-white bg-blue-500 p-3 rounded-full'>
                                    今日の年表を見る
                                </div>
                            </Link>
                        </button>
                    </div>
                </div>
            </div>
            <div> 
                <div className="float-right w-72 h-72 mt-5 mr-20 ">
                    <Image alt ="準備中" src={title_logo}></Image>
                </div>
            </div>
        </div>
    )
}

export default HomeHeader;