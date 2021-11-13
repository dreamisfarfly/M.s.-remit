<template>
	<!-- start 商品详情 -->
	<view class="commodity-details">
		<!-- start 商品轮播图 -->
		<u-swiper :list="bannerList" height="560"></u-swiper>
		<!-- end 商品轮播图 -->
		<!-- start 拼团商品信息 -->
		<groupGoodsInfo></groupGoodsInfo>
		<!-- end 拼团商品信息 -->
		<!-- start 商品信息 -->
		<view class="goods-info">
			<view class="goods-info-title">
				大雁展翅般优美的曲线给客厅一抹动人的微笑以“轻设
				计”、“轻女性”为设计关键词，3色56款，延展出全屋…
			</view>
		    <view class="both-sides-align price-info center-horizontally">
				<text class="price">￥299.00</text>
				<text class="inventory">剩余999+件</text>
			</view>
		</view>
		<!-- end 商品信息 -->
		<!-- start 规格信息 -->
		<view class="both-sides-align specification">
			<text class="specification-label">运费及包装</text>
			<text class="specification-val">包配包安装</text>
		</view>
		<!-- end 规格信息 -->
		<!-- start 拼团展示 -->
		<view class="group-view">
			<view class="group-view-title">拼团列表</view>
			<view class="group-view-content">
				<view class="group-view-list" v-for="(item,key) in 2" :key="key" :class="key!=0?'group-btm':''">
					<view class="group-user-info">
						<image src="https://gimg2.baidu.com/image_search/src=http%3A%2F%2Fimg.jj20.com%2Fup%2Fallimg%2Ftp03%2F1Z921134I12011-0-lp.jpg&refer=http%3A%2F%2Fimg.jj20.com&app=2002&size=f9999,10000&q=a80&n=0&g=0n&fmt=jpeg?sec=1639384889&t=da49c41c4f305e01541cc2555a67ce94"
						class="user-img"></image>
						<text class="user-name">Bub***</text>
					</view>
					<view class="group-info">
						<text>还差1人成团</text>
						<view class="go-group-btn">去拼团</view>
					</view>					
				</view>
			</view>
		</view>
		<!-- end 拼团展示 -->
		<!-- start 商品详情 -->
		<view class="product-details">
			<u-tabs-swiper ref="tabs"
			name="cate_name" :list="list" 
			active-color="#1A1A1A" inactive-color="#1A1A1A"
			bg-color="#FFFFFF" :is-scroll="false"
			bar-height="8" bar-width="76"
			:current="current" @change="tabsChange"></u-tabs-swiper>
			<view class="separator"></view>
			<u-parse v-if="current ==0 " class="parse-content" :html="content"></u-parse>
			<u-parse v-if="current ==1 " class="parse-content" :html="contents"></u-parse>
		</view>
		<!-- end 商品详情 -->
		<goodsOperationHurdle></goodsOperationHurdle>
	</view>	
	<!-- end 商品详情 -->
</template>

<script>
	import groupGoodsInfo from './components/groupGoodsInfo.vue'
	import goodsOperationHurdle from './components/goodsOperationHurdle.vue'
	export default {
		components:{
			goodsOperationHurdle,
			groupGoodsInfo
		},
		data() {
			return {
				type: 3,
				wantPopup: false,
				current: 0,
				bannerList: [{
						image: 'https://cdn.uviewui.com/uview/swiper/1.jpg',
						title: '昨夜星辰昨夜风，画楼西畔桂堂东'
					},
					{
						image: 'https://cdn.uviewui.com/uview/swiper/2.jpg',
						title: '身无彩凤双飞翼，心有灵犀一点通'
					},
					{
						image: 'https://cdn.uviewui.com/uview/swiper/3.jpg',
						title: '谁念西风独自凉，萧萧黄叶闭疏窗，沉思往事立残阳'
					}
				],
				list: [
					{
					  name: '商品详情'
				    }, 
					{
					  name: '常见问题'
				    }
				],
				content: `
					<img src="https://cdn.uviewui.com/uview/swiper/2.jpg" />
					<img src="https://cdn.uviewui.com/uview/swiper/2.jpg" />
					<img src="https://cdn.uviewui.com/uview/swiper/2.jpg" />
					<img src="https://cdn.uviewui.com/uview/swiper/2.jpg" />
					<img src="https://cdn.uviewui.com/uview/swiper/2.jpg" />
				`,
				contents: `
				<p style="color: #4C4C4C;line-height: 48rpx;"> Constance Guisset游走在设计与梦之间，将形态与功
					能、实用性与想象力、优雅与趣味达到巧妙平衡。跟随
					她的标志性设计语言，以柔美线条牵引，展开一幅浪漫
					诗意的设计画卷 </p>
				<p style="color: #4C4C4C;line-height: 48rpx;">	被称作造梦者的法国女性设计师Constance Guisset，
					以诗意和感性的设计，将蝴蝶灵感注入桌几形式，32条
					金属线立体呈现蝴蝶双翅，让点线面的设计理性与抽象
					创想一体联结  </p>
				<p style="color: #4C4C4C;line-height: 48rpx;">	被称作造梦者的法国女性设计师Constance Guisset，
					以诗意和感性的设计，将蝴蝶灵感注入桌几形式，32条
					金属线立体呈现蝴蝶双翅，让点线面的设计理性与抽象
					创想一体联结  </p>
				<p style="color: #4C4C4C;line-height: 48rpx;">	被称作造梦者的法国女性设计师Constance Guisset，
					以诗意和感性的设计，将蝴蝶灵感注入桌几形式，32条
					金属线立体呈现蝴蝶双翅，让点线面的设计理性与抽象
					创想一体联结  </p>		
				`
			};
		},
		methods:{
			tabsChange(index) {
				this.current = index;
			}
		}
	}
</script>

<style scoped lang="less">
	.group-view{
		margin-top: 20rpx;
		padding: 0 30rpx;
		background-color: #FFFFFF;
		.group-view-title{
			padding: 30rpx 0;
			font-size: 28rpx;
			font-weight: 400;
			color: #4C4C4C;
		}
		.group-view-content{
			padding-bottom: 8rpx;
			.group-view-list{
				display: flex;
				font-size: 28rpx;
				font-weight: 400;
				padding: 18rpx 0;
				.group-user-info{
					display: flex;
					align-items: center;
					flex: 1;
					.user-img{
						width: 72rpx;
						height: 72rpx;
						border-radius: 50% 50%;
					}
					.user-name{
						margin-left: 30rpx;
						color: #1A1A1A;				
					}
				}
				.group-info{
					flex: 1;
					display: flex;
					align-items: center;
					justify-content: space-between;
					.go-group-btn{
						padding: 10rpx 22rpx;
						color: #FFFFFF;
						font-size: 24rpx;
						background: linear-gradient(62deg, #1F2020 0%, #444444 100%);
						border-radius: 4rpx;
					}
				}		
			}
		}
	}
	
	.commodity-details{
		.goods-info{
			padding: 0 30rpx;
			background-color: #FFFFFF;
			.goods-info-title{
				padding-top: 30rpx;
				font-size: 28rpx;
				font-weight: 550;
				color: #1A1A1A;
				line-height: 40rpx;
				display: -webkit-box;
				-webkit-box-orient: vertical;
				-webkit-line-clamp: 2;
				overflow: hidden;
				word-break: break-all;
			}
			.price-info{
				padding-top: 20rpx;
				padding-bottom: 26rpx;
				.price{
					font-size: 36rpx;
					font-weight: 500;
					color: #ED3632;
				}
				.inventory{
					font-size: 24rpx;
					font-weight: 400;
					color: #999999;
				}
			}
		}
		.product-details{
			margin-top: 20rpx;
			margin-bottom: 128rpx;
			background-color: #FFFFFF;
			padding: 0 30rpx;
			.parse-content{
				padding: 20rpx 0;
			}
		}
	}
		
	.group-btm{
		border-top: 2rpx solid rgba(0, 0, 0, 0.08);
	}
	
</style>
