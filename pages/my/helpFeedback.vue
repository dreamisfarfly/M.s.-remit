<template>
	<!-- start 帮助反馈 -->
	<view class="help-feedback build-content">
		<u-collapse :head-style="headStyle" :selected-style="selectedStyle" arrow-color="#000000">
			<u-collapse-item :title="item.head" v-for="(item, index) in itemList" :key="index">
				<view class="content-view">
				    {{item.body}}
					<view class="btn-group">
						<view class="btn-view">
							<image v-if="item.status != 1" class="btn-view-img" src="@/static/images/no-resolved.png"></image>
							<image v-if="item.status == 1" class="btn-view-img" src="@/static/images/resolved.png"></image>
							<text class="btn-title" :class="item.status == 1?'select-font-color':''">已解决</text>
						</view>
						<view class="btn-view mar-left">
							<image v-if="item.status != 2" class="btn-view-img" src="@/static/images/no-unsolved.png"></image>
							<image v-if="item.status == 2" class="btn-view-img" src="@/static/images/unsolved.png"></image>
							<text class="btn-title" :class="item.status == 2?'select-font-color':''">未解决</text>
						</view>
					</view>
				</view>
			</u-collapse-item>
		</u-collapse>
		<view class="operation-view">
			<view class="operation-btn" @tap="util.jump('/pages/my/feedback')">意见反馈</view>
			<view class="operation-btn" style="margin-left: 70rpx;">联系客服</view>
		</view>
	</view>
	<!-- end 帮助反馈 -->
</template>

<script>
	export default {
		data() {
			return {
				//头部样式
				headStyle: {
					fontFamily: "PingFangSC-Medium, PingFang SC",
					fontSize: "32rpx",
					fontWeight: "550",
					color: "#222222",
					lineHeight: "44rpx",
					borderBottom: "1rpx solid rgba(0, 0, 0, 0.08)"
				},
				selectedStyle: {
					fontFamily: "PingFangSC-Medium, PingFang SC",
					fontSize: "32rpx",
					fontWeight: "550",
					color: "#222222",
					lineHeight: "44rpx"
				},
				itemStyle: {
					borderBottom: 'none',
					color:"red"
				},
				itemList: [{
					head: "怎么申请发票",
					body: "购买后可以在【我的账户】-【购买订单中】直接填写开票信息申请发票。",
				    status: 0
				}, {
					head: "项目找不到",
					body: "学会欣赏，实际是一种积极生活的态度，是生活的调味品，会在欣赏中发现生活的美",
				    status: 1
				}, {
					head: "如何联系人工客服",
					body: "但是据说雕刻大卫像所用的这块大理石，曾被多位雕刻家批评得一无是处，有些人认为这块大理石采凿得不好，有些人嫌它的纹路不够美",
				    status: 2
				}, {
					head: "怎么绑定手机号",
					body: "但是据说雕刻大卫像所用的这块大理石，曾被多位雕刻家批评得一无是处，有些人认为这块大理石采凿得不好，有些人嫌它的纹路不够美",
				    status: 2
				}, {
					head: "第三方登录",
					body: "但是据说雕刻大卫像所用的这块大理石，曾被多位雕刻家批评得一无是处，有些人认为这块大理石采凿得不好，有些人嫌它的纹路不够美",
				    status: 2
				}]
			}
		},
		methods: {

		}
	}
</script>

<style scoped lang="less">
	.help-feedback{
		padding-top: 38rpx;
	}
	.content-view{
		font-size: 28rpx;
		font-weight: 400;
		color: #222222;
	}
	.btn-group{
		margin-top: 30rpx;
		margin-bottom: 20rpx;
		display: flex;
		justify-content: center;
		.btn-view{
			border: 2rpx solid #434343;
			width: 200rpx;
			height: 60rpx;
			display: flex;
			align-items: center;
			.btn-view-img{
				margin-left: 20rpx;
				width: 36rpx;
				height: 36rpx;
			}
			.btn-title{
				margin-left: 20rpx;
				font-weight: 400;
				color: #4C4C4C;
				font-size: 28rpx;
				font-family: PingFangSC-Regular, PingFang SC;
			}
		}
		.mar-left{
			margin-left: 44rpx;
		}
		.select-font-color{
			color: #1B1B1B!important;
		}
	}
	
	.operation-view{
		margin-top: 232rpx;
		display: flex;
		justify-content: center;
		.operation-btn{
			color: #FFFFFF;
			font-weight: 500;
			font-size: 28rpx;
			padding: 24rpx 84rpx;
			background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
		}
	}
</style>
