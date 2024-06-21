<script setup>
import PostItem from './PostItem.vue';
const post1 = {
    user: {
        id: 1,
        avatar: 'https://img.freepik.com/free-vector/graphic-designer-man_78370-159.jpg?t=st=1718855587~exp=1718859187~hmac=69acac0bddfce0963d965c2ebd589a6eee877f806db8877ee42071d9903e3641&w=1380',
        name: 'Shafwan Haque'
    },
    group: null,
    attachments:[
        {
            id:1,
            name:'test1.png',
            url: 'https://picsum.photos/1000',
            mime: 'image/png'
        },
        {
            id:2,
            name:'test2.png',
            url: 'https://picsum.photos/1000',
            mime: 'image/png'
        }
    ],
    body: '<p>Are you looking to dive into web development with a robust and elegant framework? Look no further than Laravel. As one of the most popular PHP frameworks, Laravel offers a range of powerful tools and an expressive syntax that makes building modern web applications a breeze. Whether youre a beginner or an experienced developer, Laravels comprehensive documentation and active community will help you get up and running quickly.</p><p>From routing and middleware to Eloquent ORM and Blade templating, Laravel provides everything you need to create scalable and maintainable web applications. With features like task scheduling, authentication, and real-time event broadcasting, Laravel simplifies the development process while allowing you to focus on writing clean and efficient code.</p><p>Join the Laravel community today and start building amazing applications with ease. Experience the power and flexibility of Laravel, and see why its the framework of choice for developers worldwide.</p>',
    created_at: '2024-6-14 15:12'
}
const post2 = {
    user: {
        id: 1,
        avatar: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTyYn1YDt7j_DC96GzP25NplDfCBvfHa7S3jg&s',
        name: 'Fahim Wayez'
    },
    group: {
        id: 1,
        name: 'Web3'
    },
    attachments:[
        {
            id:1,
            name:'test1.png',
            url: 'https://picsum.photos/1000',
            mime: 'image/png'
        },
        {
            id:2,
            name:'test2.png',
            url: 'https://picsum.photos/1000',
            mime: 'image/png'
        },
        {
            id:3,
            name:'test3.docx',
            url: '#',
            mime: 'application/msword'
        },
        
    ],
    body: '<p>In the rapidly evolving world of technology, Web3 stands out as a revolutionary development, poised to redefine our digital experiences. Unlike Web2, which is characterized by centralized platforms and data silos, Web3 is built on the principles of decentralization, transparency, and user sovereignty. With blockchain technology at its core, Web3 enables peer-to-peer interactions without intermediaries, giving users control over their data and online identities.</p><p>The promise of Web3 extends beyond just financial transactions. It envisions a more equitable internet where creators are directly rewarded for their contributions, and communities can govern themselves through decentralized autonomous organizations (DAOs). Smart contracts automate trust and eliminate the need for traditional gatekeepers, opening up new possibilities for innovation and collaboration. Join us as we explore the transformative potential of Web3 and how it is set to reshape the future of the internet.</p>',
    created_at: '2024-6-14 15:12'
}
</script>

<template>
    <!--Post List-->
    <div>
        <div>
            <PostItem :post="post1"/>
            <PostItem :post="post2"/>
        </div>
    </div>
</template>

<style scoped>
</style>
