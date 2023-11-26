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


  export type MyEvent = {
    age: number
    score: number
    title: string
    text: string
  }