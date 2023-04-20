<template>
    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:p-8 bg-white dark:bg-gray-800 shadow-sm sm:rounded-lg">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-6 py-4">Account Number</th>
                        <th class="px-6 py-4">Balance</th>
                        <th class="px-6 py-4">View Transactions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y dividegray-200 divide-solid">
                    <template v-for="account in accounts" :key="account.id">
                        <tr class="mx-6 text-center">
                            <td class="py-4">{{ account.account_number }}</td>
                            <td class="py-4">R {{ account.balance }}</td>
                            <td class="py-4"><button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">View</button></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        name:'accout-list',
        data(){
            return {
                accounts: []
            }
        },
        mounted(){
            // const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            axios.get('http://localhost:8000/api/accounts', {
                    headers: {
                        // 'Authorization': 'Bearer ' + localStorage.getItem('access_token'),
                        'Accept': 'application/json'
                        // 'X-XSRF-TOKEN': token
                    }
                }).then(res => {
                    
                    this.accounts = res.data;
                })
        },
        method: {
        }
    }
</script>