<template>
	<!-- start 优秀设计师 -->
	<view class="excellent-designer">
		<cardHeader title="优秀设计师" skipUrl="/pages/design/architectList"></cardHeader>
	    <scroll-view scroll-x="true" class="scroll-view_H">
	   	    <view class="group-view" v-for="(item,key) in 4" :key="key">
		        <stylistCard type="card"></stylistCard>
			</view>
		</scroll-view>
	</view>
	<!-- end 优秀设计师 -->
</template>

<script>
	import stylistCard from './stylistCard.vue'
	export default {
		name:"excellentDesigner",
		components:{
			stylistCard
		},
		data() {
			return {		
				
			};
		},
		methods:{

		}
	}
</script>

<style scoped lang="less">
	.group-view{
		width: 600rpx;
		display: inline-block;
		margin-right: 20rpx;
	}
</style>
