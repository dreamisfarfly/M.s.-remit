<template>
	<!-- start 选项卡分类 -->
	<view class="options-classify">
		<u-tabs-swiper ref="tabs"
		name="cate_name" :list="list" 
		active-color="#1A1A1A" inactive-color="#1A1A1A"
		bg-color="#F9FAF9" :is-scroll="false"
		bar-height="8" bar-width="76"
		:current="current" @change="tabsChange"></u-tabs-swiper>
		<view class="separator"></view>
		<view class="tab-content">
			<template v-if="type == 'goods'">
				<goodsCard v-for="(item,key) in 10" :key="key"></goodsCard>
			</template>
			<template v-if="type == 'design'">
				<designCard v-for="(item,key) in 10" :key="key"></designCard>
			</template>
		</view>
	</view>
	<!-- end 选项卡分类 -->
</template>

<script>
	export default {
		name:"optionsClassify",
		props:{
			type: {
				type: String,
				default: ''
			}
		},
		data() {
			return {
				current: 0,				
				list: [
					{
					  name: '主材'
				    }, 
					{
					  name: '电器'
				    }, 
					{
					  name: '家具',
					},
					{
					  name: '卫浴',
					},
					{
					  name: '软装',
					},
					{
					  name: '其他',
					},
				],
			};
		},
		methods:{
			// tabs通知swiper切换
			tabsChange(index) {
				this.current = index
			},
		}
	}
</script>

<style scoped lang="less">
	.options-classify{
		margin-top: 50rpx;
	}
	
	.tab-content{
		padding-top: 24rpx;
		display: flex;
		flex-wrap: wrap;
		justify-content: space-between;
	}
</style>
