import moment from 'moment';
moment.locale('pt-br');

async function getNoticeOpen()
{
    const dataNoticeOpen = [];
    const period = `${'registrationFrom=LTE('+moment().format('YYYY-MM-DD')+')&registrationTo=GTE('+moment().format('YYYY-MM-DD')+')'}`;
    const field = '@select=id,singleUrl,name,subTitle,type,shortDescription,terms';
    const codeAgent = process.env.MIX_ID_AGENTS_SECULT

    const dataF = await fetch(process.env.MIX_API_MAPA_URL + '/api/opportunity/find/?&'+period+'&@order=createTimestamp%20DESC&'+field+'&@files=(avatar.avatarBig):url&@page=1&status=eq(1)&owner=IN('+codeAgent+')')
    .then(res => {
        return res.json()
    })
    .then(function(data) {

        return data
        // console.log(dataNoticeOpen)
    })
    .catch(err => {
        console.log({err})
    })

    return dataF
}

async function getNoticeClosed()
{
    const period = `${'registrationTo=LTE('+moment().format('YYYY-MM-DD')+')'}` //menor que a data do dia
    const field = '@select=id,singleUrl,name' //campos que deseja pelo api
    const year = moment().format("YYYY")+'-01-01,'+moment().format("YYYY")+'-12-31' //ano inteiro, variando somente o ano
    const codeAgent = process.env.MIX_ID_AGENTS_SECULT //Agentes dono das oportunidades
    const dataClosed = await fetch(
        process.env.MIX_API_MAPA_URL + 
        'api/opportunity/find/?'+
        period + '&@order=createTimestamp%20DESC&'+
        field + '&@files=(avatar.avatarBig):url,description&@page=1&registrationFrom=BET('+year+')&owner=IN('+codeAgent+')'
    )
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        //
        return data
    })
    .catch(err => {
        console.log('getNoticeClosed ', err)
    })

    return dataClosed
}

async function getNoticePublic()
{
    const period = `${'registrationFrom=GT('+moment().format('YYYY-MM-DD')+')&registrationTo=GT('+moment().format('YYYY-MM-DD')+')'}`;
    const field = '@select=id,singleUrl,name' //campos que deseja pelo api
    const codeAgent = process.env.MIX_ID_AGENTS_SECULT //Agentes dono das oportunidades
    const dataClosed = await fetch(
        process.env.MIX_API_MAPA_URL + 
        'api/opportunity/find/?'+
        period + '&@order=createTimestamp%20DESC&'+
        field + '&@files=(avatar.avatarBig):url,description&owner=IN('+codeAgent+')'
    )
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        //
        return data
    })
    .catch(err => {
        console.log('getNoticePublic ', err)
    })

    return dataClosed
}

async function getNoticeProcess()
{
    const period = `${'registrationFrom=LT('+moment().format('YYYY-MM-DD')+')&registrationTo=GTE('+moment().format('YYYY-MM-DD')+')'}`;
    const field = '@select=id,singleUrl,name' //campos que deseja pelo api
    const codeAgent = process.env.MIX_ID_AGENTS_SECULT //Agentes dono das oportunidades
    const dataNotice = await fetch(
        process.env.MIX_API_MAPA_URL + 
        'api/opportunity/find/?'+
        period + '&@order=createTimestamp%20DESC&'+
        field + '&@files=(avatar.avatarBig):url,description&owner=IN('+codeAgent+')'
    )
    .then(res => {
        // console.log(res.json())
        return res.json()
    })
    .then(function(data) {
        //
        return data
    })
    .catch(err => {
        console.log('getNoticeProcess ', err)
    })

    return dataNotice
}


export default {
    getNoticeOpen,
    getNoticeClosed,
    getNoticePublic,
    getNoticeProcess
}