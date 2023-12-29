export type MyEvent = {
    age: number
    score: number
    title: string
    text: string
  }
  
  export type MyHistory = {
    id: string
    title: string
    author: string
    member_id: string
    public: boolean
    events: MyEvent[]
    created: string
    updated: string
  }
  
  export type Member = {
    id: string
    name: string
    email: string
    birthday: string
    avatarurl: string
    profile: string
    created: string
    updated: string
  }
  
  export type ShowProfile = {
    name: string
    age: string
    profile: string
  }